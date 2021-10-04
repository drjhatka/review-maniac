@extends('layouts.backend')

@section('content')
     <div class="row mt-3"> 
        {!! Form::open() !!}
        <div class="container">
            <div class="row mt-2 mb-2" style="border: 2px solid red; border-radius:5px; background-color: pink; padding:10px;">
                <div class="card-title">
                    Name    
                </div> 
                @php
                        HTMLHelper::add_text_input('firstname', ['class'=>'form-control','placeholder'=>'Add First Name'], 4);
                        HTMLHelper::add_text_input('middlename',  ['class'=>'form-control','placeholder'=>'Add Middle Name'],4);
                        HTMLHelper::add_text_input('lastname', ['class'=>'form-control','placeholder'=>'Add First Name'],4);
                    @endphp
                    
                </div>
            </div> 

            <hr>
            <div class="row mt-2 mb-2">
                @php
                    HTMLHelper::label('country','Country',['class'=>'labels'],1);
                    HTMLHelper::add_select_input('country',['czech'=>'Czech Republic', 'usa'=>'USA'],['class'=>'form-control'],2);  
                    
                    HTMLHelper::label('age','Age',['class'=>'labels'],1);
                    HTMLHelper::add_select_input('age',['18'=>18,'19'=>19],['class'=>'form-control'],1); 

                    HTMLHelper::label('gender','Sex',['class'=>'labels'],1);
                    HTMLHelper::add_select_input('gender',['male'=>'Male','female'=>'Female'],['class'=>'form-control'],1);

                    HTMLHelper::label('dob','BirthDate',['class'=>'labels'],1);
                    HTMLHelper::add_date_input('dob',null,['class'=>'form-control'],2);  
                @endphp
            </div>

            <hr>
            <div class="row mt-2 mb-2">
                @php
                    HTMLHelper::add_text_input('height',['placeholder'=>'Ethnicity','class'=>'form-control'],2); 
                    HTMLHelper::add_text_input('height',['placeholder'=>'Height','class'=>'form-control'],2); 
                    HTMLHelper::add_text_input('weight',['placeholder'=>'Weight','class'=>'form-control'],2); 

                    HTMLHelper::add_text_input('breast_size',['placeholder'=>'Breast Size','class'=>'form-control'],2);              
                    HTMLHelper::add_text_input('belly_size',['placeholder'=>'Belly Size','class'=>'form-control'],2);  
                    HTMLHelper::add_text_input('hip_size',['placeholder'=>'Hip Size','class'=>'form-control'],2); 
                @endphp
            </div>
            <hr>
            <div class="row mt-4 mb-2" style="background-color:navy; padding:10px;">
                @php
                    
                HTMLHelper::label('skin_color','Skin Color',['class'=>'labels'],2);
                HTMLHelper::add_select_input('skin_color',['white'=>'white','pale_white'=>'Pale White','yellow'=>'Yellow'],['class'=>'form-control'],2);
                HTMLHelper::label('eye_color','Eye Color',['class'=>'labels'],2);
                HTMLHelper::add_select_input('eye_color',['blue'=>'blue','green'=>'Green','black'=>'Black'],['class'=>'form-control'],2);
                HTMLHelper::label('hair_color','Hair Color',['class'=>'labels'],2);
                HTMLHelper::add_select_input('hair_color',['blonde'=>'Blonde','brunette'=>'Brunette'],['class'=>'form-control'],2);
                @endphp
            </div>

            <hr>
            <div class="row mt-2 mb-2">
                @php
                HTMLHelper::label('natural_breast','Natural Breast?',['class'=>'labels'],2);
                HTMLHelper::add_checkbox_input('natural_breast','',[],1); 

                HTMLHelper::label('redhead','Redhead?',['class'=>'labels'],2);
                HTMLHelper::add_checkbox_input('redhead','',[],1);  

                HTMLHelper::label('bubble_butt','Bubble Butt?',['class'=>'labels'],2);
                HTMLHelper::add_checkbox_input('bubble_butt','',[],1); 

                HTMLHelper::label('does_anal','Does Anal?',['class'=>'labels'],2);
                HTMLHelper::add_checkbox_input('does_anal','',[],1); 
                echo '<hr class="mt-2">';
                HTMLHelper::label('does_interracial','Does IR?',['class'=>'labels'],2);
                HTMLHelper::add_checkbox_input('does_interracial','',[],1); 

                HTMLHelper::label('does_gangbang','Does Gangbang?',['class'=>'labels'],2);
                HTMLHelper::add_checkbox_input('does_gangbang','',[],1); 

                HTMLHelper::label('does_lesbian','Does Lesbian?',['class'=>'labels'],2);
                HTMLHelper::add_checkbox_input('does_lesbian','',[],1); 

                HTMLHelper::label('is_retired','Is Retired?',['class'=>'labels'],2);
                HTMLHelper::add_checkbox_input('is_retired','',[],1); 



                @endphp
            </div>
        
            <hr>
            <div class="row mt-2 mb-2">
                @php

                    
                    HTMLHelper::label('piercing','Piercing?',['class'=>'labels'],1);
                    HTMLHelper::add_checkbox_input('piercing','',[],1); 
            //Hidden text field based on piercing data
                    HTMLHelper::add_text_input('piercing_detail',['class'=>'form-control','placeholder'=>'Add Piercing details','hidden'=>true],4);
                
                    HTMLHelper::label('tattoos','Tattoos?',['class'=>'labels'],1);
                    HTMLHelper::add_checkbox_input('tattoos','',[],1); 
            
            //Hidden text field for tattoos description data
                    HTMLHelper::add_text_input('tattoo_detail',['class'=>'form-control','placeholder'=>'Add Tattoo details','hidden'=>true],4);
                
                @endphp
            </div>

            <div class="row">
                <div class="col-12 text-center mt-2 mb-2">
                    
                    {!! Form::submit('Add', ['class'=>'btn btn-primary col-4 text-center']) !!}
                    
                </div>
            </div>
       
        {!! Form::close() !!}
     </div> 
@endsection