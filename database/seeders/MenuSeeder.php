<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $menus = [
            ['icon' => 'fas fa-home', 'name' => 'Pagina Inicial'],
            ['icon' => 'fas fa-hashtag', 'name' => 'Explorar'],
            ['icon' => 'far fa-bell', 'name' => 'Notificações'],
            ['icon' => 'far fa-envelope', 'name' => 'Menssagens'],
            ['icon' => 'far fa-bookmark', 'name' => 'Itens Salvo'],
            ['icon' => 'fas fa-clipboard-list', 'name' => 'Lista'],
            ['icon' => 'far fa-user', 'name' => 'Perfil'],
            ['icon' => 'fas fa-ellipsis-h', 'name' => 'Mostrar mais']
        ];

        foreach ($menus as $menu){
            Menu::factory(1)->create($menu);
        }
    }
}
