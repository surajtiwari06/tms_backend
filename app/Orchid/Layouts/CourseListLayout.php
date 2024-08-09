<?php

namespace App\Orchid\Layouts;

use App\Models\Registration;
use Illuminate\Http\Request;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Fields\Input;


class CourseListLayout extends Table
{
    protected $target = 'registrations';

    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Name')
                ->render(function (Registration $registrations) {
                    return Link::make($registrations->name)
                    ->route('platform.course.list', $registrations->id);
                })
                ->sort()
                ->filter(Input::make()),

            TD::make('gender', 'Gender')
                ->render(function (Registration $registrations) {
                    return Link::make($registrations->gender)
                    ->route('platform.course.list', $registrations->id);
                })
                ->sort()
                ->filter(Input::make()),

            TD::make('email', 'Email')
                ->render(function (Registration $registrations) {
                    return Link::make($registrations->email)
                    ->route('platform.course.list', $registrations->id);
                }),

            TD::make('phone', 'Phone')
                ->render(function (Registration $registrations) {
                    return Link::make($registrations->phone)
                    ->route('platform.course.list', $registrations->id);
                }),

            TD::make('company', 'Company')
                ->render(function (Registration $registrations) {
                    return Link::make($registrations->company)
                    ->route('platform.course.list', $registrations->id);
                }),

            TD::make('study', 'Study')
                ->render(function (Registration $registrations) {
                    return Link::make($registrations->study)
                    ->route('platform.course.list', $registrations->id);
                })
                ->sort()
                ->filter(Input::make()),

            TD::make('address', 'Address')
                ->render(function (Registration $registrations) {
                    return Link::make($registrations->address)
                    ->route('platform.course.list', $registrations->id);
                }),

            TD::make('city', 'City')
                ->render(function (Registration $registrations) {
                    return Link::make($registrations->city)
                    ->route('platform.course.list', $registrations->id);
                })
                ->sort()
                ->filter(Input::make()),

            TD::make('state', 'State')
                ->render(function (Registration $registrations) {
                    return Link::make($registrations->state)
                    ->route('platform.course.list', $registrations->id);
                })
                ->sort()
                ->filter(Input::make()),

            TD::make('message', 'Message')
                ->render(function (Registration $registrations) {
                    return Link::make($registrations->message)
                    ->route('platform.course.list', $registrations->id);
                }),
         
        ];
    }
}
