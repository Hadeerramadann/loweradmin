
@extends('admin.home')

@section('content')
    <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">العملاء </h4>
                  
                  <form class="forms-sample">
                
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">بيانات العملاء </h4>
                  
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">اسم العميل /الشركه</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="">الهاتف المحمول</label>
                      <input type="tel" class="form-control" id="" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for=""> التلفون الارضي</label>
                      <input type="tel" class="form-control" id="" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="">  العنوان</label>
                      <input type="textarea" class="form-control" id="" placeholder="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">البريد الالكتروني </label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    
                    
                   
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

    </div>



@endsection
