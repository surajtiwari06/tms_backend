<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use App\Models\Registration;
use Orchid\Screen\Fields\TextArea;
use Orchid\Support\Facades\Layout;


class CourseEditScreen extends Screen
{
    /**
     * @var Registration
     */
    public $registration;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @param Registration $registration
     * @return array
     */
    public function query(Registration $registration): iterable
    {
        return [
            'registration' => $registration
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'View Course Registration';
    }
    public function description(): ?string
    {
        return "Generative AI Course";
    }
    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::tabs([
                'General Info' => [
                    Layout::rows([
                        Input::make('registration.name')
                            ->title('Name')
                            ->placeholder('Enter name')
                            ->required(),

                        Select::make('registration.gender')
                            ->title('Gender')
                            ->options([
                                'Male' => 'Male',
                                'Female' => 'Female',
                                'Other' => 'Other',
                            ])
                            ->placeholder('Select gender')
                            ->required(),

                        Input::make('registration.email')
                            ->title('Email')
                            ->placeholder('Enter email')
                            ->required()
                            ->type('email'),

                        Input::make('registration.phone')
                            ->title('Phone')
                            ->placeholder('Enter phone number')
                            ->required()
                            ->type('tel'),

                        Input::make('registration.company')
                            ->title('Company')
                            ->placeholder('Enter company'),

                        Input::make('registration.study')
                            ->title('Study')
                            ->placeholder('Enter study'),

                        TextArea::make('registration.message')
                            ->title('Message')
                            ->placeholder('Enter message'),
                    ]),
                ],
                'Address Info' => [
                    Layout::rows([
                        Input::make('registration.address')
                            ->title('Address')
                            ->placeholder('Enter address'),

                        Input::make('registration.city')
                            ->title('City')
                            ->placeholder('Enter city'),

                        Input::make('registration.state')
                            ->title('State')
                            ->placeholder('Enter state'),
                    ]),
                ],                
            ])
        ];
    }
}