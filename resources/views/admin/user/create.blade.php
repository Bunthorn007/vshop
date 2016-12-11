@extends('./layouts/admin')

@section('header')
    <title>Create User</title>
    <link rel="stylesheet" href="../../css/signup-2.min.css">
    <link rel="stylesheet" href="../../css/contacts.min.css">
@endsection


@section('logo')
    <a class="navbar-brand navbar-brand-center" href="index-2.html">
        <img class="navbar-brand-logo" src="../../img/logo-inverse.svg" alt="Elephant">
    </a>
@endsection

@section('user_icon')
    <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
        <img class="rounded" width="36" height="36" src="../../img/0180441436.jpg" alt="Teddy Wilson"> Teddy Wilson
        <span class="caret"></span>
    </button>
@endsection

@section('content')
    <div class="signup">
        <div class="title-bar">
            <h1 class="title-bar-title">
                <span class="icon icon-user" style="color:#d9230f"></span>
                <span class="d-ib">User Registration Form</span>
            </h1>
        </div>
        <div class="signup-body">
            <div class="signup-divider">
                <div class="divider">
                    <div class="divider-content">USER INFORMATION</div>
                </div>
            </div>
            <div class="contact-avatar">
                <label class="contact-avatar-btn">
                    <span class="icon icon-camera"></span>
                    <input class="file-upload-input" type="file" name="file">
                </label>
                <img class="img-rounded" width="128" height="128" src="../../img/3002121059.jpg" alt="Abbey Robinson">
            </div>
            <div class="signup-form">
                <form data-toggle="validator" data-groups='{"birthdate": "birth_month birth_day birth_year"}'>
                    <div class="row gutter-xs">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="first-name">First name</label>
                                <input id="first-name" class="form-control" type="text" name="first_name" spellcheck="false" data-msg-required="Please enter your first name." required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="last-name">Last name</label>
                                <input id="last-name" class="form-control" type="text" name="last_name" spellcheck="false" data-msg-required="Please enter your last name." required>
                            </div>
                        </div>
                    </div>
                    <div class="row gutter-xs">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="email" name="email" spellcheck="false" autocomplete="off" data-msg-required="Please enter your email address." required>
                            </div>
                        </div>
                    </div>
                    <div class="row gutter-xs">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" class="form-control" type="password" name="password" minlength="6" data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required>
                                <small class="help-block">6-character minimum; case sensitive.</small>
                            </div>
                        </div>
                    </div>
                    <div class="row gutter-xs">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="password">Confirm Password</label>
                                <input id="confirm_password" class="form-control" type="password" name="confirm_password" minlength="6" data-msg-minlength="Password must be 6 characters or more." data-msg-required="Confirm your password." required>
                                <small class="help-block">6-character minimum; case sensitive.</small>
                            </div>
                        </div>
                    </div>
                    <div class="row gutter-xs">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="birth-month">Birthdate</label>
                                <div class="row gutter-xs">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <select id="birth-month" class="custom-select" name="birth_month" data-msg-required="Please enter your birthday." required>
                                                <option value="" disabled="disabled" selected="selected">Month</option>
                                                <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input id="birth-day" class="form-control" type="number" name="birth_day" placeholder="Day" min="1" max="31" data-msg-min="Please enter a valid day of the month." data-msg-max="Please enter a valid day of the month." data-msg-required="Please enter your birthday." required>
                                        </div>
                                    </div>
                                    <div class="col-xs-3">
                                        <div class="form-group">
                                            <input id="birth-year" class="form-control" type="number" name="birth_year" placeholder="Year" min="1900" max="2016" data-msg-min="Please enter a valid year." data-msg-max="Please enter a valid year." data-msg-required="Please enter your birthday." required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutter-xs">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select id="gender" class="custom-select" name="gender" data-msg-required="Please indicate your gender." required>
                                    <option value="" disabled="disabled" selected="selected">Select...</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Not specified</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row gutter-xs">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="custom-control custom-control-primary custom-checkbox">
                                    <input id="agree" class="custom-control-input" type="checkbox" name="agree" data-msg-required="In order to use our services, you must agree to the Terms of Service." required>
                                    <span class="custom-control-indicator"></span>
                                    <small class="custom-control-label">I agree to the Elephant <a href="#">Terms of Service</a>.</small>
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Sign up</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer')

@endsection