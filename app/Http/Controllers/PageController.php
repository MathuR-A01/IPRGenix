<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
// Note: We are importing the default Laravel base controller to extend it.

class PageController extends BaseController
{
    /** Display the 'About Us' page.*/
    public function about_us()
    {
        return view('other_pages.about_us');
    }

    /** Display the 'Contact Us' page. */
    public function contact_us()
    {
        return view('other_pages.contact_us');
    }
    /** Display the 'Membership and Registration' page. */
    public function memberships()
    {
        return view('other_pages.memberships');
    }
    /** Display the 'Services' page. */
    public function services_accreditations()
    {
        return view('services.services_accreditations');
    }
    public function services_curriculum_design()
    {
        return view('services.services_curriculum_design');
    }
    public function services_institution_building()
    {
        return view('services.services_institution_building');
    }
    public function services_ipr()
    {
        return view('services.services_ipr');
    }
    public function services_legal_advisory()
    {
        return view('services.services_legal_advisory');
    }
    public function services_nep_implementation()
    {
        return view('services.services_nep_implementation');
    }
    public function services_quality_assurance()
    {
        return view('services.services_quality_assurance');
    }
    public function services_strategic_planning()
    {
        return view('services.services_strategic_planning');
    }
    
}
