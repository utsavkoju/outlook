@extends('_templates/default')
@section('main')

<div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Compose New Message</h3>
            </div>
            	{{ Form::open(array('route' => 'sender', 'class' => 'form-horizontal', 'role'=>'form','files'=>true)) }}

            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <input class="form-control" name="to" placeholder="To:">
              </div>
              <div class="form-group">
                <input class="form-control" name="subject" placeholder="Subject:">
              </div>
              <div class="form-group">
                    <textarea id="compose-textarea" name="message" class="form-control" style="height: 300px; z-index: auto; line-height: 20px; font-size: 14px; transition: none; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);">
                    </textarea>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
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