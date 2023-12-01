<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class CrudController extends Controller
{

    public function autoCrud()
    {
        return view("autoCrud");
    }


    // CRUD empleados
    public function empleadosIndex()
    {
        $sql = DB::select('select * from empleados');
        return view("empleados")->with("datos", $sql);
    }

    public function empleadoCreate(Request $request)
    {
        try {
            $sql = DB::insert('insert into empleados(matricula, nombre, salario, puesto, fecha_registro)
            values(?,?,?,?,?)', [
                $request->txtMatricula,
                $request->txtNombre,
                $request->txtSalario,
                $request->txtPuesto,
                $request->txtFecha_registro
            ]);
        } catch (Throwable $th) {
            $sql = 0;
        }
        if ($sql == True) {
            return back()->with("Correcto", "Registrado correctamente");
        } else {
            return back()->with("Incorrecto", "Error al registrar");
        }
    }


    public function empleadoUpdate(Request $request)
    {
        try {
            $sql = DB::update("update empleados set nombre=?, salario=?, puesto=?,fecha_registro=? 
                                where matricula =?", [
                $request->txtNombre,
                $request->txtSalario,
                $request->txtPuesto,
                $request->txtFecha_registro,
                $request->txtMatricula
            ]);
            if ($sql == false) {
                $sql = 1;
            }
        } catch (Throwable $th) {
            $sql = 0;
        }
        if ($sql == True) {
            return back()->with("Correcto", "Registrado editado correctamente");
        } else {
            return back()->with("Incorrecto", "Error al editar");
        }
    }



    public function empleadoDelete($id)
    {
        try {
            $sql = DB::delete("delete from empleados where matricula =?", [$id]);
        } catch (Throwable $th) {
            $sql = 0;
        }
        if ($sql == True) {
            return back()->with("Correcto", "Registrado eliminado correctamente");
        } else {
            return back()->with("Incorrecto", "Error al eliminar");
        }
    }



    // Crud autos
    public function autosIndex()
    {
        $sql = DB::select('select * from autos');
        return view("autos")->with("datos", $sql);
    }



    public function autoCreate(Request $request)
    {
        try {
            $sql = DB::insert('insert into autos(matricula, marca, modelo, color)
            values(?,?,?,?)', [
                $request->txtMatricula,
                $request->txtMarca,
                $request->txtModelo,
                $request->txtColor,
            ]);
        } catch (Throwable $th) {
            $sql = 0;
        }
        if ($sql == True) {
            return back()->with("Correcto", "Registrado correctamente");
        } else {
            return back()->with("Incorrecto", "Error al registrar");
        }
    }


    public function autoUpdate(Request $request)
    {
        try {
            $sql = DB::update("update autos set marca=?, modelo=?, color=?
                                where matricula =?", [
                $request->txtMarca,
                $request->txtModelo,
                $request->txtColor,
                $request->txtMatricula
            ]);
            if ($sql == false) {
                $sql = 1;
            }
        } catch (Throwable $th) {
            $sql = 0;
        }
        if ($sql == True) {
            return back()->with("Correcto", "Registrado editado correctamente");
        } else {
            return back()->with("Incorrecto", "Error al editar");
        }
    }



    public function autoDelete($id)
    {
        try {
            $sql = DB::delete("delete from autos where matricula =?", [$id]);
        } catch (Throwable $th) {
            $sql = 0;
        }
        if ($sql == True) {
            return back()->with("Correcto", "Registrado eliminado correctamente");
        } else {
            return back()->with("Incorrecto", "Error al eliminar");
        }
    }


    // Crud clientes
    public function clientesIndex()
    {
        $sql = DB::select('select * from clientes');
        return view("clientes")->with("datos", $sql);
    }



    public function clienteCreate(Request $request)
    {
        try {
            $sql = DB::insert('insert into clientes(id, nombre, telefono, email, fecha_registro)
               values(?,?,?,?,?)', [
                $request->txtId,
                $request->txtNombre,
                $request->txtTelefono,
                $request->txtEmail,
                $request->txtFecha_registro
            ]);
        } catch (Throwable $th) {
            $sql = 0;
        }
        if ($sql == True) {
            return back()->with("Correcto", "Registrado correctamente");
        } else {
            return back()->with("Incorrecto", "Error al registrar");
        }
    }


    public function clienteUpdate(Request $request)
    {
        try {
            $sql = DB::update("update clientes set nombre=?, telefono=?, email=?, fecha_registro=?
                                   where id =?", [
                $request->txtNombre,
                $request->txtTelefono,
                $request->txtEmail,
                $request->txtFecha_registro,
                $request->txtId
            ]);
            if ($sql == false) {
                $sql = 1;
            }
        } catch (Throwable $th) {
            $sql = 0;
        }
        if ($sql == True) {
            return back()->with("Correcto", "Registrado editado correctamente");
        } else {
            return back()->with("Incorrecto", "Error al editar");
        }
    }



    public function clienteDelete($id)
    {
        try {
            $sql = DB::delete("delete from clientes where id =?", [$id]);
        } catch (Throwable $th) {
            $sql = 0;
        }
        if ($sql == True) {
            return back()->with("Correcto", "Registrado eliminado correctamente");
        } else {
            return back()->with("Incorrecto", "Error al eliminar");
        }
    }
}
