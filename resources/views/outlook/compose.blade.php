@extends('_templates/default')
@section('main')
                <div class="col-md-9">
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