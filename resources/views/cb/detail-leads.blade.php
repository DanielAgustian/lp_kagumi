@extends("crudbooster::admin_template")

@section('cssinline')

@endsection

@section('content')
<div class="row">
  <div class="col-md-4">

  <!-- Profile Image -->
    <div class="box box-primary">
      <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="{{ $client->photo == '' ? 'https://inspektorat.kotawaringinbaratkab.go.id/public/uploads/user/default-user-imge.jpeg' : $client->photo}}" alt="User profile picture">

        <h3 class="profile-username text-center">{{ ucwords($client->username) }}</h3>

        <p class="text-muted text-center">{{ ucfirst($client->status) }}</p>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Name</b> <a class="pull-right">{{ $client->name ? ucwords($client->name) : '-' }}</a>
          </li>
          <li class="list-group-item">
            <b>Username</b> <a class="pull-right">{{ $client->username ? $client->username : '-' }}</a>
          </li>
          <li class="list-group-item">
            <b>Email</b> <a class="pull-right"><i class="fa fa-envelope-o text-{{$client->contactEmailValidation == "true" ? "success" : "danger"}}"></i> {{ $client->email ? $client->email : '-' }}</a>
          </li>
          <li class="list-group-item">
            <b>Phone</b> <a class="pull-right">{{ $client->phone ? $client->phone : '-' }}</a>
          </li>
          <li class="list-group-item">
            @php
              $parent = DB::table('cms_users')->where('id', '=', $client->parent)->first()->name;
            @endphp
            <b>Parent</b> <a class="pull-right">{{ $client->parent ? $parent : '--'}}</a>
          </li>
          <li class="list-group-item">
            <b>Origin</b> <a class="pull-right">{{ $client->origin ? ucwords($client->origin) : '-' }}</a>
          </li>
          <li class="list-group-item">
            <b>Campaign</b> <a class="pull-right" href="/crm/share-campaign/{{$client->campaign}}" target="_blank">{{ $client->campaign ? $client->campaign : '-' }}</a>
          </li>
          <li class="list-group-item">
            <b>From</b> <a class="pull-right" href="/crm/share-campaign/{{$client->campaign}}" target="_blank">{{ $client->jenis ? $client->jenis : '-' }}</a>
          </li>
        </ul>







        <form action="{{ route('changeStatusLead', $client->id)}}" method="post">
          {{ csrf_field() }}
          <input type="hidden" name="old_status" value="{{$client->status}}">
          <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
            <select class="form-control" name="status">
              <option value="lead" {{ $client->status == 'lead' ? 'selected' : '' }}>Lead</option>
              <option value="no-respond" {{ $client->status == 'no-respond' ? 'selected' : '' }}>No Respond</option>
              <option value="contact" {{ $client->status == 'contact' ? 'selected' : '' }}>Contact</option>
              <option value="potential" {{ $client->status == 'potential' ? 'selected' : '' }}>Potential</option>
              <option value="win" {{ $client->status == 'win' ? 'selected' : '' }}>Win</option>
              <option value="lose" {{ $client->status == 'lose' ? 'selected' : '' }}>Lose</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary" value="Submit Status">
          </div>
        </form>
        @if(CRUDBooster::myPrivilegeId() <=2)
          <form action="{{route('assignLeads')}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="old_assign" value="{{$client->parent}}">
            <input type="hidden" name="client_id" value="{{$client->id}}">
            <div class="form-group">
              <label for="exampleInputEmail1">Assign To</label>
              <select class="form-control" name="new_assign">
                  @foreach($assign as $items)
                    <option value="{{$items->id}}" {{ $items->id == $client->parent ? 'selected' : '' }}>{{$items->name}}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">
              <input type="submit" class="form-control btn btn-primary" value="Submit Assign">
            </div>
          </form>
        @endif



        <!--<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>-->
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- About Me Box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Client's Profile</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <strong><i class="fa fa-book margin-r-5"></i> Metadata</strong>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>IP addr</b> <a class="pull-right">{{ $client->ipaddress}}</a>
          </li>
          <li class="list-group-item">
            <b>Desktop</b> <a class="pull-right">{{ $client->desktop}}</a>
          </li>
          <li class="list-group-item">
            <b>Device</b> <a class="pull-right">{{ $client->device}}</a>
          </li>
          <li class="list-group-item">
            <b>Lang</b> <a class="pull-right">{{ $client->lang}}</a>
          </li>
        </ul>

        <hr>

        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

        <p class="text-muted">{{ $client->kota }}</p>

        <hr>

        <!-- <strong><i class="fa fa-pencil margin-r-5"></i> Social Media</strong>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>Facebook</b> <a class="pull-right">{{ $client->facebook}}</a>
          </li>
          <li class="list-group-item">
            <b>Google +</b> <a class="pull-right">{{ $client->google}}</a>
          </li>
          <li class="list-group-item">
            <b>Twitter</b> <a class="pull-right">{{ $client->twitter}}</a>
          </li>
          <li class="list-group-item">
            <b>Linkedin</b> <a class="pull-right">{{ $client->linkedin}}</a>
          </li>
          <li class="list-group-item">
            <b>Instagram</b> <a class="pull-right">{{ $client->instagram}}</a>
          </li>

        </ul>

        <hr> -->

        <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

        <p></p>
      </div>
    <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <div class="col-md-8">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">

        <li class="active"><a href="#timeline" data-toggle="tab">Follow Up</a></li>
        <li ><a href="#settings" data-toggle="tab">Details</a></li>

        @if($client->contactEmailValidation == "true")
          <li><a href="#email" data-toggle="tab">Email</a></li>
        @endif
      
      </ul>
      <div class="tab-content">
        <!-- /.tab-pane -->
        <!-- /.tab-pane -->

        <div class=" tab-pane" id="settings">
          <form class="form-horizontal" action="{{route('updateDataLead',['id'=>$client->id])}}" method="POST">
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $client->name }}">
              </div>
            </div>
            <div class="form-group">
              <label for="inputCompany" class="col-sm-2 control-label">Nama Perusahaan</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="company" placeholder="Company" value="{{ $client->company }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Lahir</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" name="dob" value="{{ $client->dob }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="address" placeholder="Alamat">{{ $client->address }}</textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Kota</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="kota" placeholder="Kota" value="{{ $client->kota }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">KTP</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="ktp" placeholder="No KTP" value="{{ $client->ktp }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $client->email }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Phone</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="phone" placeholder="Telepon" value="{{ $client->phone }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Message</label>
              <div class="col-sm-10">
                <textarea type="text" class="form-control" name="message" placeholder="Message" >{{ $client->message }}</textarea>
              </div>
            </div>



            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger">Submit</button>
              </div>
            </div>
          </form>
        </div>

        <div class="active tab-pane" id="timeline">
          <p><b>Follow Up :</b></p>
          <form class="form-horizontal" method="post" action="{{route('saveFollowUp')}}" enctype="multipart/form-data">
            <div class="form-group">
              <div class="col-sm-12">
                <textarea name="activity" rows="2" class="form-control" required></textarea>
              </div>
            </div>
            {{csrf_field()}}
            <input type="hidden" name="client_id" value="{{$client->id}}">
            <input type="hidden" name="parent_id" value="{{$client->parent}}">
            <div class="form-group">
              <div class="col-sm-6">
                <input type="file" name="bukti" class="form-control">
              </div>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-success pull-right">Submit</button>
              </div>
            </div>

          </form>

          <!-- The timeline -->

          <ul class="timeline timeline-inverse">
            @foreach($activities as $activity)

              <!-- timeline time label -->

              <li class="time-label">
                <span class="bg-blue">
                  {{ date('d-m-Y',strtotime($activity->created_at))}}
                </span>
              </li>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <li>
                <i class="fa fa-user bg-aqua"></i>

                <div class="timeline-item">
                  <span class="time"><i class="fa fa-clock-o"></i> {{ $activity->created_at ?  \Carbon\Carbon::parse( $activity->created_at)->diffForHumans(): '-' }}</span>

                  <h3 class="timeline-header"><a href="{{env('APP_URL')}}/mkt-detail/{{$activity->user_id}}" target="_blank">{{ ucwords($activity->komentator->name) }}</a> {{ $activity->jenis }}</h3>

                  <div class="timeline-body">
                    {!! $activity->activity !!}
                    @if(!empty($activity->bukti))
                    <br>
                    <a data-lightbox="roadtrip" href="{{url('/')}}/uploads/{{$activity->bukti}}">
                      <img src="{{url('/')}}/uploads/{{$activity->bukti}}" alt="" width="50%">
                    </a>
                    @endif
                  </div>
                </div>
              </li>
            <!-- END timeline item -->
            @endforeach


          </ul>
        </div>

        <!-- /.tab-pane -->
        <div class="tab-pane" id="email">

          <form action="" class="form-horizontal" method="post">
            <div class="form-group">
              <label class="col-sm-2 control-label">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="title" placeholder="Title" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">

              </div>
            </div>
            <textarea class="textarea" name="content" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>

            <div class="form-group">
              <label class="col-sm-2 control-label">From</label>
              <div class="col-sm-4">

                <input type="text" name="senderName" class="form-control" value="{{CRUDBooster::myName()}}" readonly>

              </div>

              <div class="col-sm-6">
                <div class="input-group">
                  <input type="text" name="senderName" class="form-control" required>
                  <span class="input-group-addon">@smartmaxco.co.id</span>
                </div>
              </div>
            </div>
            <div class="form-group">
              {{ csrf_field() }}
              <input type="hidden" name="clientid" value="{{$client->id}}">
              <input type="hidden" name="recepientName" value="{{$client->name}}">
              <input type="hidden" name="recepientEmail" value="{{$client->email}}">
              <div class="col-sm-12">
                <input type="submit" name="submit" value="SEND" class="btn btn-primary btn-block">
              </div>
            </div>
          </form>

        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="autobot">
          <p><small>not enough data</small></p>
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- /.nav-tabs-custom -->
  </div>


</div>
@endsection


@section('js')
@endsection
