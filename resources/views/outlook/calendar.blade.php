@extends('_templates/default')
@section('main')
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