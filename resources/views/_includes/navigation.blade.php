<section class="content-header">
      <h1>Mailbox <small>Office 365</small></h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="{!! URL::to('/composer') !!}" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-envelope" aria-hidden="true"></i> Compose</a>
          <a href="{!! URL::to('/compose') !!}" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-envelope" aria-hidden="true"></i> Bulk Send</a>
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="{!! URL::to('/inbox/Inbox') !!}"><i class="fa fa-inbox"></i> Inbox </a></li>
                <li class=""><a href="{!! URL::to('/inbox/sentitems') !!}"><i class="fa fa-envelope-o"></i> Sent</a></li>
                <li><a href="{!! URL::to('/contact') !!}"><i class="fa fa-address-book" aria-hidden="true"></i> Contacts </a></li>
                <li><a href="{!! URL::to('/calendar') !!}"><i class="fa fa-calendar"></i> Calendar</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        </div>