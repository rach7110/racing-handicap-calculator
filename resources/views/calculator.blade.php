@extends('layouts.app')

@section('title')
  Get Started
@endsection

@section('content')
<style type="text/css">
  .time .control-label, .calc .control-label {font-weight: 400;}
  .form-control  {display: inline;}
  .time .form-control {width:70px; }
  .calc .form-control {width:140px; }
  .time .control-label, .calc .control-label {margin-right: 15px;}
  .units { font-size: 14px}
  .units.offset  {margin-left: 5px;}
  /* Hide HTML5 Up and Down arrows. */
  input[type=number]::-webkit-inner-spin-button, 
  input[type=number]::-webkit-outer-spin-button { 
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      margin: 0; 
  }
</style>

  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Time on Distance</h3>
    </div>
    <div class="panel-body">
      <h5>Description</h5>
      <p>Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn. Lorem Ipsum đã được sử dụng như một văn bản chuẩn cho ngành công nghiệp in ấn từ những năm 1500, khi một họa sĩ vô danh ghép nhiều đoạn văn bản với nhau để tạo thành một bản mẫu văn bản. Đoạn văn bản này không những đã tồn tại năm thế kỉ, mà khi được áp dụng vào tin học văn phòng, nội dung của nó vẫn không hề bị thay đổi. Nó đã được phổ biến tron
      </p>

      <!-- ELAPSED TIME -->
      <hr>
      <h5>Elapsed Time</h5>

      <form class="form-horizontal">
        <!-- START TIME -->
        <div class="form-group time">
          <label class="col-sm-2 control-label">Start Time</label>
          <input type="number" class="form-control" name="st-hours" placeholder="9" min="0" max="23">:
          <input type="number" class="form-control" name="st-minutes" placeholder="34" min="0" max="59">:
          <input type="number" class="form-control" name="st-seconds" placeholder="59" min="0" max="59">
          <span class="units offset">hh:mm:ss</span>
        </div>

        <!-- END TIME -->
        <div class="form-group time">
          <label class="col-sm-2 control-label">End Time</label>
          <input type="number" class="form-control" name="fn-hours" placeholder="9" min="0" max="23">:
          <input type="number" class="form-control" name="fn-minutes" placeholder="34" min="0" max="59">:
          <input type="number" class="form-control" name="fn-seconds" placeholder="59" min="0" max="59">
          <span class="units offset">hh:mm:ss</span>
        </div>
        
        <div class="form-group">
          <div class="col-sm-2 col-sm-offset-2">
            <button type="submit" class="btn btn-default">Elapsed Time</button>
          </div>
        </div>

      </form>


      <!-- TIME OF DISTANCE CALCULATOR: -->
      <hr>
      <h5>Calculator</h5>
      <form class="form-horizontal">
<!-- 
          <div class="form-group calc">
            <label class="col-sm-2 control-label" for="distance">Elapsed Time</label>
              <input type="text" id="distance" class="form-control" name="distance" placeholder="14:34:50">
              <span class="units offset">hh:mm:ss</span>
          </div>
 -->
          <div class="form-group time">
            <label class="col-sm-2 control-label">Elapsed Time</label>
            <input type="number" class="form-control" name="hours" placeholder="9" min="0" max="23">:
            <input type="number" class="form-control" name="minutes" placeholder="34" min="0" max="59">:
            <input type="number" class="form-control" name="seconds" placeholder="59" min="0" max="59">
            <span class="units offset">hh:mm:ss</span>
          </div>

          <div class="form-group calc">
            <label class="col-sm-2 control-label" for="distance">Distance</label>
            <!-- <div class="col-sm-3"> -->
              <input type="text" id="distance" class="form-control " name="distance" placeholder="9.5">
              <span class="units offset">miles</span>
            <!-- </div> -->
          </div>

          <div class="form-group calc">
            <label class="col-sm-2 control-label" for="rating">PHRF Rating</label>
            <!-- <div class="col-sm-3"> -->
              <input type="text" id="rating" class="form-control" name="rating" placeholder="108">
            <!-- </div> -->
          </div>


          <div class="form-group">
            <div class="col-sm-2 col-sm-offset-2">
              <button type="submit" class="btn btn-default">Calculate</button>
            </div>
          </div>

      </form>
    </div>
  </div>










  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Time on Time</h3>
    </div>
    <div class="panel-body">
      <h5>Description</h5>
      <p>Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn. Lorem Ipsum đã được sử dụng như một văn bản chuẩn cho ngành công nghiệp in ấn từ những năm 1500, khi một họa sĩ vô danh ghép nhiều đoạn văn bản với nhau để tạo thành một bản mẫu văn bản. Đoạn văn bản này không những đã tồn tại năm thế kỉ, mà khi được áp dụng vào tin học văn phòng, nội dung của nó vẫn không hề bị thay đổi. Nó đã được phổ biến tron
      </p>

      <hr>
      <!-- TIME OF TIME CALCULATOR: -->
      <h5>Calculator</h5>
      <form class="form-inline">
        
        <div class="row">
          <div class="form-group col-md-2">
            <label class="sr-only" for="distance">A Factor</label>
            <input type="text" id="distance" class="form-control " name="distance" placeholder="A Factor">

          </div>

          <div class="form-group col-md-2">
            <label class="sr-only" for="rating">B Factor</label>
            <input type="text" id="rating" class="form-control" name="rating" placeholder="B Factor">
          </div>
        </div>

        <button type="submit" class="btn btn-default">Calculate</button>
      </form>      

    </div>
  </div>

@endsection