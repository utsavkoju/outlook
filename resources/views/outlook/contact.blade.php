@extends('_templates/default')
@section('main')

        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Contact</h3>
            </div>
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                    <?php foreach($contacts['value'] as $contact) { ?>
                    <tr>
                        <td><?php echo $contact['GivenName'] ?></td>
                        <td><?php echo $contact['Surname'] ?></td>
                        <td><?php echo $contact['EmailAddresses'][0]['Address'] ?></td>
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