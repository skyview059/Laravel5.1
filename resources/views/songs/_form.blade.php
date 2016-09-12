    <div class="form-group {{ $errors->first('title') ? 'has-error': '' }}">                  
        {!! FORM::label('title', 'Enter Title') !!}        
        {!! FORM::text('title', null, array( 'class'=> 'form-control') ) !!}
        {!! $errors->first('title', '<span class="help-block">:message</span>') !!}
    </div>


    <div class="form-group">
        {!! FORM::label('lyrics', 'Enter Lyrics')!!}
        {!! FORM::textarea('lyrics', null, ['class'=> 'form-control'])!!}
    </div>


    <div class="form-group  {{ $errors->first('slug') ? 'has-error': '' }}">
        {!! FORM::label('slug', 'Slug')!!}        
        {!! FORM::text('slug', null, ['class'=> 'form-control'])!!}
        {!! $errors->first('slug', '<span class="help-block">:message</span>') !!}
    </div>

    <div class="form-group">
        {!! FORM::submit('Update Song', null, ['class'=> 'btn btn-primaryl'])!!}
    </div>
