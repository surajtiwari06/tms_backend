<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;
use App\Orchid\Layouts\CourseListLayout;
use App\Models\Registration;

class CourseListScreen extends Screen
{
    public function query(): iterable
{
    $registrations = Registration::latest()->paginate(20);
    // dd($registrations);

    return [
        'registrations' => $registrations
    ];
}


    public function name(): ?string
    {
        return 'Generative AI Course Registration';
    }
    public function description(): ?string
      {
          return "All Registrations";
      }

    public function commandBar(): array
    {
        return [];
    }

    public function layout(): iterable
    {
        return [
            CourseListLayout::class,
        ];
    }
}