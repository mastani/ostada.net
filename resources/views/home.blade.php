@extends('layout')
@section('content')
    <div id="addProfessor" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">افزودن استاد جدید</h4>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="prof_name">نام و نام خانوادگی استاد :</label>
                                    <input style="direction: rtl;" type="text" class="form-control" name="prof_name"
                                           id="prof_name"
                                           required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="university">دانشگاه :</label>
                                    <input class="typeahead uni form-control" type="text" dir="rtl" name="university"
                                           id="university">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="stars stars-example-fontawesome-o">
                                    <select id="example-fontawesome-o" name="rating" data-current-rating="5.6"
                                            autocomplete="off">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <span class="title current-rating">
                  Current rating: <span class="value"></span>
                </span>
                                    <span class="title your-rating hidden">
                  Your rating: <span class="value"></span>&nbsp;
                  <a href="#" class="clear-rating"><i class="fa fa-times-circle"></i></a>
                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"> لغو</button>
                        <button type="submit" class="btn btn-primary" name="add_professor"> ثبت</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <h1>استاد جو ...</h1>
        <h2>پلتفرمی برای امتیاز دهی به اساتید</h2>
        <br/>
        <br/>
        <div>
            <input class="typeahead prof" type="text" placeholder="نام استاد خود را وارد کنید ...">
        </div>
        <br/>
        <hr class="colorgraph"/>

    </div>
@stop