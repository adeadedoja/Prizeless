    <div class="form-group">
        {!! Form::text('name', null , array('class' => 'form-control', 'placeholder' => 'Enter Full Name')) !!}
    </div>
    <div class="form-group">
    {!! Form::input('email', 'email', null , array('class' => 'form-control border-input', 'placeholder' => 'Enter Email Address')) !!}
    </div>
    <div class="form-group">
    {!! Form::text('phone', null , array('class' => 'form-control', 'placeholder' => 'Enter Phone Number')) !!}
    </div>
    <div class="form-group">
    {!! Form::text('subject', null , array('class' => 'form-control', 'placeholder' => 'Enter Subject')) !!}
    </div>
    <div class="form-group">
    {!! Form::textarea('message', null , array('class' => 'form-control', 'placeholder' => 'Enter Message')) !!}
    </div>
