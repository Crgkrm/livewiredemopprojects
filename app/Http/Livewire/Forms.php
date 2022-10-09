<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Rgister;
use Livewire\WithPagination;
use Symfony\Component\HttpFoundation\Session\Session;
use validator;


class Forms extends Component{
 use WithPagination;
 protected $paginationTheme='boostrap';
    public $name;
    public $email;
    protected $rules=[
       'name'=>'required|min:3|max:20',
       'email'=>'required|email',

    ];

    public function resetInput()
    {
        $this->name=null; 
        $this->email=null; 
    }
  
    public function submit(){
      //validation for data//
     $validateData=$this->validate();
     Rgister::create($validateData);
     session()->flash('success','form data is submitted');
     $this->resetInput();

    }


    public function render()
    {   
        $rgister=Rgister::orderBy('id','DESC')->paginate(10);
        return view('livewire.forms',['rgister'=>$rgister]);
    }
}
