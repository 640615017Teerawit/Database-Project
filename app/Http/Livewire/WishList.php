<?php
  
  namespace App\Http\Livewire;
  use Gloudemans\Shoppingcart\Facades\Cart;
  use Livewire\Component;
  
  
  class wishList extends Component
  {
      protected $listeners = ['cartUpdated' => '$refresh'];
      public $wishItems = [];
  
      public function removewish($id)
      {
        \Cart::remove($id);
  
          session()->flash('success', 'Wish has removed !');
      }
  
      public function clearAllwish()
      {
          \wish::clear();
  
          session()->flash('success', 'All wish Clear Successfully !');
      }
  
      public function render()
      {
          $this->wishItems = \wish::getContent()->toArray();
  
          return view('livewire.wish-list');
      }
  }