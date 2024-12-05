<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;

class Login extends \Filament\Pages\Auth\Login
{
  protected function getForms(): array
  {
    return [
      'form' => $this->form(
        $this->makeForm()
          ->schema([
            $this->getNidnnimFormComponent(),
            $this->getPasswordFormComponent(),
            $this->getRememberFormComponent(),
          ])
          ->statePath('data'),
      ),
    ];
  }

  protected function getNidnnimFormComponent(): Component
  {
    return TextInput::make('nidnnim')
      ->label('NIDN / NIM')
      ->required()
      ->autocomplete()
      ->autofocus()
      ->extraInputAttributes(['tabindex' => 1]);
  }

  protected function getCredentialsFromFormData(array $data): array
  {
    return [
      'nidnnim' => $data['nidnnim'],
      'password' => $data['password'],
    ];
  }
}
