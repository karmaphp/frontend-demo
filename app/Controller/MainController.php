<?php namespace App\Controller;

use App\Base\Controller;

class MainController extends Controller
{
    public function Index()
    {
        return 'Merhaba Dünya';
    }

    public function Hello($name)
    {
        return 'Hello ' . $name;
    }

    public function JsonResponse()
    {
        return $this->json([
            'success' => false,
            'message' => 'Merhaba Dünya!'
        ]);
    }

    public function XmlResponse()
    {
        return $this->xml(
            '
<note>
    <to>Tove</to>
    <from>Jani</from>
    <heading>Reminder</heading>
    <body>Don\'t forget me this weekend!</body>
</note>
'
        );
    }

    public function SmartyResponse()
    {
        return $this->c->smarty->fetch('Example.tpl', [
            'firstname' => 'John',
            'lastname'  => 'Doe'
        ]);
    }

    public function TwigResponse()
    {
        return $this->c->twig->render('Example.twig', [
            'firstname' => 'John',
            'lastname'  => 'Doe'
        ]);
    }

}
