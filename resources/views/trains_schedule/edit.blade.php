@extends('layouts.index')

@section('content')

<form method="POST" action="{{ route('trains_schedule.update', $data->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('put') }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Edit Jadwal Kereta</h4>
                        <div class="form-group{{ $errors->has('trains_detail_id') ? ' has-error' : '' }}">
                            <label for="trains_detail_id" class="col-md-4 control-label">Nama Kereta</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="trains_name" type="text" class="form-control" readonly="" value="{{$data->trains_detail->trains->name}}" required>
                                </div>
                                @if ($errors->has('trains_detail_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('trains_detail_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('trains_code') ? ' has-error' : '' }}">
                            <label for="trains_code" class="col-md-4 control-label">Kode Kereta</label>
                            <div class="col-md-6">
                                <input id="trains_code" type="text" class="form-control" readonly="" value="{{$data->trains_detail->code}}" required>
                              
                                @if ($errors->has('trains_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('trains_code') }}</strong>
                                    </span>
                                @endif
                                 
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('station_id') ? ' has-error' : '' }}">
                            <label for="station_id" class="col-md-4 control-label">Keberangkatan dari</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="station_nama" type="text" class="form-control" readonly="" value="{{$data->from}}" required>
                                </div>
                                @if ($errors->has('station_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sttaion_id') }}</strong>
                                    </span>
                                @endif
                                 
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('station_id') ? ' has-error' : '' }}">
                            <label for="station_id" class="col-md-4 control-label">Tujuan Ke</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                <input id="station_nama2" type="text" class="form-control" value="{{$data->destination}}" readonly="" required>
                                </div>
                                @if ($errors->has('station_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('station_id') }}</strong>
                                    </span>
                                @endif
                                 
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('eco_seat_pay') ? ' has-error' : '' }}">
                                <label for="eco_seat_pay" class="col-md-4 control-label">Kursi Ekonomi</label>
                                <div class="col-md-6">
                                    <input id="eco_seat_pay" type="number"  class="form-control uang" name="eco_seat_pay" value="{{$data->eco_seat_pay}}">
                                    @if ($errors->has('eco_seat_pay'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('eco_seat_pay') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('bus_seat_pay') ? ' has-error' : '' }}">
                               <label for="bus_seat_pay" class="col-md-4 control-label">Kursi Bisnis </label>
                               <div class="col-md-6">
                                   <input id="bus_seat_pay" type="number"  class="form-control" name="bus_seat_pay" value="{{$data->bus_seat_pay}}">
                                   @if ($errors->has('bus_seat_pay'))
                                       <span class="help-block">
                                           <strong>{{ $errors->first('bus_seat_pay') }}</strong>
                                       </span>
                                   @endif
                               </div>
                           </div>
                           <div class="form-group{{ $errors->has('exec_seat_pay') ? ' has-error' : '' }}">
                               <label for="exec_seat_pay" class="col-md-4 control-label">Kursi Executive</label>
                               <div class="col-md-6">
                                   <input id="exec_seat_pay" type="number" class="form-control" name="exec_seat_pay" value="{{$data->eco_seat_pay}}">
                                   @if ($errors->has('exec_seat_pay'))
                                       <span class="help-block">
                                           <strong>{{ $errors->first('exec_seat_pay') }}</strong>
                                       </span>
                                   @endif
                               </div>
                           </div>
                        <button type="submit" class="btn btn-primary" id="submit">
                                    Update
                        </button>
                        <a href="{{route('trains_schedule.index')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
</form>
@endsection