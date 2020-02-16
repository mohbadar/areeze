<!DOCTYPE html>
<html lang="en">
<div class="logo">
    <img src="../../images/download.jpg" alt="logo" style="margin-left:250px;">
</div>
<hr class="_15-deg">
                            <form novalidate>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>Basic Text Input <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required" value="{{$data[0]->first_name}}">  </div>

                                        </div>

                                    </div>

                                </div>
                            </form>
        <!-- /.content -->


{{--    <p>{{$data}}</p>--}}
    <p>first Name: {{$data[0]->first_name}}</p>
    <p>first Name: {{$data[0]->last_name}}</p>
</html>
