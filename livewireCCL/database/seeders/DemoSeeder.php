<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

/**
 * Datos de muestra para la demo publicada en Vercel.
 */
class DemoSeeder extends Seeder
{
    public function run(): void
    {
        (new User())->forceFill([
            'name' => 'Administrador Demo',
            'email' => 'admin@demo.com',
            'password' => Hash::make('demo1234'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ])->save();

        $cursos = [
            ['Contabilidad Básica para Emprendedores', 'Contabilidad', 'Aprende a registrar ingresos, gastos y a leer los estados financieros esenciales de tu negocio.', ['WF2-SU_yJkk', 'ZwCO7tHz1vw']],
            ['Estados Financieros', 'Contabilidad', 'Elaboración e interpretación del balance general, estado de resultados y flujo de efectivo.', ['iSNMvzR8-8U', 'uys8sqeeMMw']],
            ['Declaración del IVA', 'Tributación', 'Proceso para declarar el IVA mensual y semestral ante el SRI, con ejemplos prácticos.', ['OHqPQpxfV3s', '9jV4ySaNAOY']],
            ['Impuesto a la Renta para Personas Naturales', 'Impuestos', 'Cálculo del impuesto a la renta, gastos personales deducibles y plazos de declaración.', ['LdT7nZ1RmnQ', 'G7IpsOLboG4']],
            ['Control de Inventarios', 'Manejo de activos', 'Métodos de valoración de inventarios y buenas prácticas para el control de existencias.', ['JLB3KXGqXDc', 'PjidmX8c3FY']],
            ['Gestión de Cuentas por Pagar', 'Manejo de pasivos', 'Organiza las obligaciones con proveedores y planifica los pagos de tu empresa.', ['wxB3JyQLWSg', 'c321zhwf5iI']],
        ];

        foreach ($cursos as [$titulo, $categoria, $descripcion, $videos]) {
            $curso = Curso::create(compact('titulo', 'categoria', 'descripcion'));
            foreach ($videos as $videoId) {
                $curso->videoLinks()->create(['url' => "https://www.youtube.com/watch?v={$videoId}"]);
            }
        }

        // Estudiante inscrito en algunos cursos, con distinto avance
        $estudiante = new User();
        $estudiante->forceFill([
            'name' => 'Estudiante Demo',
            'email' => 'usuario@demo.com',
            'password' => Hash::make('demo1234'),
            'role' => 'user',
            'email_verified_at' => now(),
        ])->save();

        $estudiante->cursos()->attach([
            1 => ['progreso' => 100, 'completado' => true],
            3 => ['progreso' => 40],
            5 => ['progreso' => 0],
        ]);
    }
}
