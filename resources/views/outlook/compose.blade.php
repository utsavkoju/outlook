@extends('_templates/default')
@section('main')

<section class="content-header">
      <h1>Composer <small>Office 365</small></h1>
    </section>
    <section class="content">
      <div class="row">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Compose</h3>
            </div>
            <div class="box-body no-padding">
              <div class="table-responsive mailbox-messages">
                <div class="col-md-12">
                	{{ Form::open(array('route' => 'send', 'class' => 'form-horizontal', 'role'=>'form','files'=>true)) }}

                	<div class="box-body">
								<div class="form-group form-md-line-input">
									<label class="col-md-2 control-label" for="form_control_1">Upload Emails</label>
									<div class="col-md-10">
								    	{!! Form::file('file', null) !!}
								    </div>
								</div>
								<div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-2 col-md-10">
                                        	<button type="submit" class="btn blue">Submit</button>
                                            <a href="{!! URL::to('/inbox') !!}" class="btn default">Cancel</a>
                                        </div>
                                    </div>
                                </div>
							</div>
						{{ Form::close() }}

                </div>
              </div>

            </div>
        </div>

    </div>

  </section>
  </div>

@stop