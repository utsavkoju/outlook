@extends('_templates/default')
@section('main')
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Inbox</h3>
            </div>
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                    <?php foreach($messages['value'] as $message) { ?>
                    <tr>
                      <td><?php echo $message['From']['EmailAddress']['Name'] ?></td>
                      <td><?php echo $message['Subject'] ?></td>
                      <td><?php echo $message['ReceivedDateTime'] ?></td>
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