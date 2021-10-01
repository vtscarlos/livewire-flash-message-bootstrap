# Welcome to StackEdit!
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
  
Small component to reactively eliminate error or success messages in livewire, to avoid having to include the display of flash messages in all your components.


# Installation

## Copy the repository folders in your project
- App\Http\Livewire
- Resources\views\livewire

## Create files and folders

Copy the component call below your navbar or wherever you want
``` bash
    @livewire('messages')
 ```

## Send your first message
``` bash
    $this->emit('success' , 'My first success message');
    $this->emit('error' , 'My last error message :( ');
```
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).