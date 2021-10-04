@extends('layouts.backend')

@section('content')

<!-- Modal -->
<div class="modal fade" id="error_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="error_modal_label">Please Check These Input Errors</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @if (count($errors)>0)
            @foreach ($errors->all() as $error)
                {{--  <div class="alert alert-danger">{{ $error }}</div>   --}}
               <p> <span class="text-danger text-bold">{{ $error }}</span></p>
            @endforeach
        @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
    
    
     <div class="row mt-3"> 
        
        {!! Form::open(['route'=>'add.pornstar']) !!}
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
echo '<hr class="mt-2 mb-2">';
                HTMLHelper::label('does_dp','Does DP?',['class'=>'labels'],2);
                HTMLHelper::add_checkbox_input('does_dp','',[],1); 

                HTMLHelper::label('does_threesome','Does Threesome?',['class'=>'labels'],2);
                HTMLHelper::add_checkbox_input('does_threesome','',[],1); 

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
                    HTMLHelper::add_checkbox_input('piercing',null,['class'=>'piercing'],1); 
            //Hidden text field based on piercing data
                    HTMLHelper::add_text_input('piercing_detail',['class'=>'form-control piercing_detail','placeholder'=>'Add Piercing details','hidden'=>true],4);
                
                    HTMLHelper::label('tattoos','Tattoos?',['class'=>'labels'],1);
                    HTMLHelper::add_checkbox_input('tattoos','',['class'=>'tattoos'],1); 
            
            //Hidden text field for tattoos description data
                    HTMLHelper::add_text_input('tattoos_detail',['class'=>'form-control tattoos_detail','placeholder'=>'Add Tattoo details','hidden'=>true],4);
                
                @endphp
            </div>

            <div class="row">
                <div class="col-12 text-center mt-2 mb-2">
                    
                    {!! Form::submit('Add', ['class'=>'btn btn-primary col-4 text-center']) !!}
                    
                </div>
            </div>
       
        {!! Form::close() !!}
     </div> 
     

     <script >
         $(document).ready(function (value) {
             $('.piercing').change( function(value) {
                 if($('.piercing').is(':checked')){
                     $('.piercing_detail').attr('hidden',false);
                 }
                 else{
                    $('.piercing_detail').attr('hidden',true);
                 }
                 
             });//end change method

             $('.tattoos').change( function(value) {
                if($('.tattoos').is(':checked')){
                    $('.tattoos_detail').attr('hidden',false);
                }
                else{
                   $('.tattoos_detail').attr('hidden',true);
                }
            });

            //activate modal on error
            var op = <?PHP echo (!empty($errors->all()) ? json_encode($errors->all()) : '""'); ?>;
            if(op.length >0){
                console.log(op.length);
                //activate modal
                $('#error_modal').modal('show');
            }

         });
     </script>
@endsection