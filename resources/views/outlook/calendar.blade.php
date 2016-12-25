@extends('_templates/default')
@section('main')
<section class="content-header">
      <h1>Mailbox <small>Office 365</small></h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="send.php" class="btn btn-primary btn-block margin-bottom"><i class="fa fa-envelope" aria-hidden="true"></i> Send</a>
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
                <li><a href="{!! URL::to('inbox') !!}"><i class="fa fa-inbox"></i> Inbox </a></li>
                <li><a href="{!! URL::to('/contact') !!}"><i class="fa fa-address-book" aria-hidden="true"></i>Contacts </a></li>
                <li class="active"><a href="#"><i class="fa fa-calendar"></i> Calendar</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Events</h3>
            </div>
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                    <?php foreach($events['value'] as $event) { ?>
                     <tr>
                      <td><?php echo $event['Subject'] ?></td>
                      <td><?php echo $event['Start']['DateTime'] ?></td>
                      <td><?php echo $event['End']['DateTime'] ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>

            </div>
        </div>
      </div>

    </div>

  </section>
  </div>

@stop