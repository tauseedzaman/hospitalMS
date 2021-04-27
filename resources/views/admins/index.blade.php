@extends('admins.layouts.app')
@section('admin_content')
<div class="row">
    <div class="col-md-12 page-header">
        <div class="page-pretitle">Overview</div>
        <h2 class="page-title">Dashboard</h2>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="icon-big text-center">
                            <i class="teal fas fa-shopping-cart"></i>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="detail">
                            <p class="detail-subtitle">New Orders</p>
                            <span class="number">6,267</span>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="fas fa-calendar"></i> For this Week
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="icon-big text-center">
                            <i class="olive fas fa-money-bill-alt"></i>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="detail">
                            <p class="detail-subtitle">Revenue</p>
                            <span class="number">$180,900</span>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="fas fa-calendar"></i> For this Month
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="icon-big text-center">
                            <i class="violet fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="detail">
                            <p class="detail-subtitle">Page views</p>
                            <span class="number">28,210</span>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="fas fa-stopwatch"></i> For this Month
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="icon-big text-center">
                            <i class="orange fas fa-envelope"></i>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="detail">
                            <p class="detail-subtitle">Support Request</p>
                            <span class="number">75</span>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <hr />
                    <div class="stats">
                        <i class="fas fa-envelope-open-text"></i> For this week
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="content">
                        <div class="head">
                            <h5 class="mb-0">Traffic Overview</h5>
                            <p class="text-muted">Current year website visitor data</p>
                        </div>
                        <div class="canvas-wrapper">
                            <canvas class="chart" id="trafficflow"></canvas>
                        </div>
                        <div class="ui hidden divider"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="content">
                        <div class="head">
                            <h5 class="mb-0">Sales Overview</h5>
                            <p class="text-muted">Current year sales data</p>
                        </div>
                        <div class="canvas-wrapper">
                            <canvas class="chart" id="sales"></canvas>
                        </div>
                        <div class="ui hidden divider"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="content">
                <div class="head">
                    <h5 class="mb-0">Top Visitors by Country</h5>
                    <p class="text-muted">Current year website visitor data</p>
                </div>
                <div class="canvas-wrapper">
                    <table class="table no-margin bg-lighter-grey">
                        <thead class="success">
                            <tr>
                                <th>Country</th>
                                <th class="text-right">Unique Visitors</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="flag-icon flag-icon-us"></i> United States</td>
                                <td class="text-right">27,340</td>
                            </tr>
                            <tr>
                                <td><i class="flag-icon flag-icon-in"></i> India</td>
                                <td class="text-right">21,280</td>
                            </tr>
                            <tr>
                                <td><i class="flag-icon flag-icon-jp"></i> Japan</td>
                                <td class="text-right">18,210</td>
                            </tr>
                            <tr>
                                <td><i class="flag-icon flag-icon-gb"></i> United Kingdom</td>
                                <td class="text-right">15,176</td>
                            </tr>
                            <tr>
                                <td><i class="flag-icon flag-icon-es"></i> Spain</td>
                                <td class="text-right">14,276</td>
                            </tr>
                            <tr>
                                <td><i class="flag-icon flag-icon-de"></i> Germany</td>
                                <td class="text-right">13,176</td>
                            </tr>
                            <tr>
                                <td><i class="flag-icon flag-icon-br"></i> Brazil</td>
                                <td class="text-right">12,176</td>
                            </tr>
                            <tr>
                                <td><i class="flag-icon flag-icon-id"></i> Indonesia</td>
                                <td class="text-right">11,886</td>
                            </tr>
                            <tr>
                                <td><i class="flag-icon flag-icon-ph"></i> Philippines</td>
                                <td class="text-right">11,509</td>
                            </tr>
                            <tr>
                                <td><i class="flag-icon flag-icon-nz"></i> New Zealand</td>
                                <td class="text-right">1,700</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="content">
                <div class="head">
                    <h5 class="mb-0">Most Visited Pages</h5>
                    <p class="text-muted">Current year website visitor data</p>
                </div>
                <div class="canvas-wrapper">
                    <table class="table no-margin bg-lighter-grey">
                        <thead class="success">
                            <tr>
                                <th>Page Name</th>
                                <th class="text-right">Visitors</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>/about.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                <td class="text-right">8,340</td>
                            </tr>
                            <tr>
                                <td>/special-promo.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                <td class="text-right">7,280</td>
                            </tr>
                            <tr>
                                <td>/products.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                <td class="text-right">6,210</td>
                            </tr>
                            <tr>
                                <td>/documentation.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                <td class="text-right">5,176</td>
                            </tr>
                            <tr>
                                <td>/customer-support.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                <td class="text-right">4,276</td>
                            </tr>
                            <tr>
                                <td>/index.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                <td class="text-right">3,176</td>
                            </tr>
                            <tr>
                                <td>/products-pricing.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                <td class="text-right">2,176</td>
                            </tr>
                            <tr>
                                <td>/product-features.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                <td class="text-right">1,886</td>
                            </tr>
                            <tr>
                                <td>/contact-us.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                <td class="text-right">1,509</td>
                            </tr>
                            <tr>
                                <td>/terms-and-condition.html <a href="#"><i class="fas fa-link blue"></i></a></td>
                                <td class="text-right">1,100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="dfd text-center">
                        <i class="blue large-icon mb-2 fas fa-thumbs-up"></i>
                        <h4 class="mb-0">+21,900</h4>
                        <p class="text-muted">FACEBOOK PAGE LIKES</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="dfd text-center">
                        <i class="orange large-icon mb-2 fas fa-reply-all"></i>
                        <h4 class="mb-0">+22,566</h4>
                        <p class="text-muted">INSTAGRAM FOLLOWERS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="dfd text-center">
                        <i class="grey large-icon mb-2 fas fa-envelope"></i>
                        <h4 class="mb-0">+15,566</h4>
                        <p class="text-muted">E-MAIL SUBSCRIBERS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <div class="card">
            <div class="content">
                <div class="row">
                    <div class="dfd text-center">
                        <i class="olive large-icon mb-2 fas fa-dollar-sign"></i>
                        <h4 class="mb-0">+98,601</h4>
                        <p class="text-muted">TOTAL SALES</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

</body>

</html>
@endsection