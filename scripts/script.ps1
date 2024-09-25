# Define the public and views folders
$publicFolder = "C:\yt\hospitalMS\public"
$viewsFolder = "C:\yt\hospitalMS\resources\views"

# Define a list of folders to exclude from the public folder scan (e.g., "public/storage", "public/tmp")
$excludeFolders = @('storage', "tmp", 'chatify', 'build')

$excludeFiles = @('bg.png', "code.jpg", 'design.jpg', 'service-bg.png','livewire.js','navbar-dropdowns.css','sidebar-default.css')

$viewsFileExtention = "*.blade.php"

# Function to validate folder existence
function ValidateFolder {
    param ($folderPath)

    if (-Not (Test-Path -Path $folderPath)) {
        Write-Host "Error: Folder $folderPath does not exist." -ForegroundColor Red
        exit 1
    }
}

# Validate the public and views folders
ValidateFolder $publicFolder
ValidateFolder $viewsFolder

# Initialize counters
$totalFilesProcessed = 0
$totalFilesDeleted = 0
$totalFilesReferenced = 0

# Get all image, JS, and CSS files from the public folder excluding specified folders
$filesInPublic = Get-ChildItem -Path $publicFolder -Recurse -Include *.jpg, *.jpeg, *.png, *.gif, *.js, *.css | 
Where-Object { 
    # Exclude files located in the specified folders
    $exclude = $false
    foreach ($excludeFolder in $excludeFolders) {
        if ($_.FullName -like "*\$excludeFolder*") {
            $exclude = $true
            break
        }
    }
    return -not $exclude
}

# Get all .blade.php files from the views folder
$viewFiles = Get-ChildItem -Path $viewsFolder -Recurse -Filter $viewsFileExtention

foreach ($file in $filesInPublic) {
    $totalFilesProcessed++

    $exclude = $false
    foreach ($excludeFile in $excludeFiles) {
        if ($file.FullName -like "*\$excludeFile") {
            $exclude = $true
            break
        }
    }

    if($exclude){
        continue
    }

    # Get the file name (without the full path)
    $fileName = $file.Name
    $filePath = $file.FullName

    # Initialize a variable to track if the file is found
    $fileFound = $false

    foreach ($view in $viewFiles) {
        # Read the content of each view file
        $viewContent = Get-Content $view.FullName

        # Check if the file name is referenced in the view content
        if ($viewContent -match [regex]::Escape($fileName)) {
            $fileFound = $true
            break
        }
    }

    if ($fileFound) {
        # Increment referenced files counter
        $totalFilesReferenced++
    }
    else {
        # If the file is not found in any view file, delete it and increment deleted files counter
        Write-Host "Deleting $filePath (Not referenced in any view file)"
        Remove-Item -Path $filePath -Force
        $totalFilesDeleted++
    }
}

# Display summary of the process
Write-Host "Cleanup completed." -ForegroundColor Green
Write-Host "Total files processed: $totalFilesProcessed"
Write-Host "Total files deleted: $totalFilesDeleted"
Write-Host "Total files referenced (kept): $totalFilesReferenced"