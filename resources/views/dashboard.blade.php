@extends('layouts.web')

@section('content')
<section class="content">
    <header class="content__title">
        <h1>Dashboard</h1>
        <small>Welcome to the Vehicle Crime Tracking System</small>

        <div class="actions">
            <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
            <a href="#" class="actions__item zmdi zmdi-check-all"></a>

            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item">Refresh</a>
                    <a href="#" class="dropdown-item">Manage Widgets</a>
                    <a href="#" class="dropdown-item">Settings</a>
                </div>
            </div>
        </div>
    </header>

    <div class="row quick-stats">
        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item bg-blue">
                <div class="quick-stats__info">
                    <h2>987,459</h2>
                    <small>Total Website Traffics</small>
                </div>

                <div class="quick-stats__chart sparkline-bar-stats">6,4,8,6,5,6,7,8,3,5,9,5</div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item bg-amber">
                <div class="quick-stats__info">
                    <h2>356,785K</h2>
                    <small>Total Website Impressions</small>
                </div>

                <div class="quick-stats__chart sparkline-bar-stats">4,7,6,2,5,3,8,6,6,4,8,6</div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item bg-purple">
                <div class="quick-stats__info">
                    <h2>$58,778</h2>
                    <small>Total Online Sales</small>
                </div>

                <div class="quick-stats__chart sparkline-bar-stats">9,4,6,5,6,4,5,7,9,3,6,5</div>
            </div>
        </div>

        <div class="col-sm-6 col-md-3">
            <div class="quick-stats__item bg-red">
                <div class="quick-stats__info">
                    <h2>214</h2>
                    <small>Total Support Tickets</small>
                </div>

                <div class="quick-stats__chart sparkline-bar-stats">5,6,3,9,7,5,4,6,5,6,4,9</div>
            </div>
        </div>
    </div>

    <div data-columns>

        <div class="card widget-calendar">
            <div class="widget-calendar__header">
                <div class="widget-calendar__year"></div>
                <div class="widget-calendar__day"></div>

                <div class="actions actions--inverse">
                    <a href="calendar.html" class="actions__item"><i class="zmdi zmdi-refresh-alt"></i></a>
                    <a href="calendar.html" class="actions__item"><i class="zmdi zmdi-plus"></i></a>
                </div>
            </div>

            <div class="widget-calendar__body"></div>
        </div>

        <div class="card todo">
            <div class="card-body">
                <h4 class="card-title">Notice</h4>
                <h6 class="card-subtitle">Venenatis portauam Inceptos ameteiam</h6>
            </div>

            <div class="listview">
                <div class="listview__item">
                    <div class="custom-control custom-control--char todo__item">
                        <input type="checkbox" class="custom-control-input" id="todo-1">
                        <label class="custom-control-label-char" for="todo-1">
                            <i class="bg-amber">P</i>
                            <div class="todo__info">
                                <span>Fivamus sagittis lacus vel augue laoreet rutrum faucibus dolor</span>
                                <small>Today at 8.30 AM</small>
                            </div>

                            <div class="listview__attrs">
                                <span>#Messages</span>
                                <span>!!!</span>
                            </div>
                        </label>
                    </div>

                    <div class="actions listview__actions">
                        <div class="dropdown actions__item">
                            <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Mark as Read</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="listview__item">
                    <div class="custom-control custom-control--char todo__item">
                        <input  type="checkbox" class="custom-control-input" id="todo-2">
                        <label class="custom-control-label-char" for="todo-2">
                            <i class="bg-light-blue">N</i>
                            <div class="todo__info">
                                <span>Nullam id dolor id nibh ultricies vehicula ut id elit</span>
                                <small>Today at 12.30 PM</small>
                            </div>

                            <div class="listview__attrs">
                                <span>#Clients</span>
                                <span>!!</span>
                            </div>
                        </label>
                    </div>

                    <div class="actions listview__actions">
                        <div class="dropdown actions__item">
                            <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Mark as Read</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="listview__item">
                    <div class="custom-control custom-control--char todo__item">
                        <input  type="checkbox" class="custom-control-input" id="todo-4">
                        <label class="custom-control-label-char" for="todo-4">
                            <i class="bg-lime">I</i>
                            <div class="todo__info">
                                <span>Integer posuere erat a ante venenatis dapibus posuere velit aliquet</span>
                                <small>05/08/2017 at 08.00 AM</small>
                            </div>

                            <div class="listview__attrs">
                                <span>#Server</span>
                                <span>!</span>
                            </div>
                        </label>
                    </div>

                    <div class="actions listview__actions">
                        <div class="dropdown actions__item">
                            <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Mark as Read</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="todos.html" class="view-more">View More</a>
            </div>
        </div>
    </div>

    <footer class="footer hidden-xs-down">
        <p>© Material Admin Responsive. All rights reserved.</p>

        <ul class="nav footer__nav">
            <a class="nav-link" href="#">Homepage</a>

            <a class="nav-link" href="#">Company</a>

            <a class="nav-link" href="#">Support</a>

            <a class="nav-link" href="#">News</a>

            <a class="nav-link" href="#">Contacts</a>
        </ul>
    </footer>
</section>
@endsection
