<?php
/*
 * Copyright (c) 2023.  FaceIt
 * @author Kelly Salazar <developmentcreativo@gmail.com>
 */

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        //app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //\Illuminate\Support\Facades\DB::table('permissions')->delete();

        Permission::where( [ 'name' => 'Ver tags' ] )->delete();
        Permission::where( [ 'name' => 'Crear tags' ] )->delete();
        Permission::where( [ 'name' => 'Modificar tags' ] )->delete();
        Permission::where( [ 'name' => 'Eliminar tags' ] )->delete();

        //Empleados
        Permission::updateOrCreate(['name' => __("View active employees")], ['group' => 'Empleados']);
        Permission::updateOrCreate(['name' => __("Export active employees")], ['group' => 'Empleados']);

        //Visitas
        Permission::updateOrCreate(['name' => __("View tour")], ['group' => 'Visitas']);
        Permission::updateOrCreate(['name' => __("Create tour")], ['group' => 'Visitas']);
        Permission::updateOrCreate(['name' => __("Update tour")], ['group' => 'Visitas']);
        Permission::updateOrCreate(['name' => __("Delete tour")], ['group' => 'Visitas']);

        Permission::updateOrCreate( [ 'name' => __( "View chklist")], [ 'group' => 'Chklist']);
        Permission::updateOrCreate( [ 'name' => __( "Create chklist")], [ 'group' => 'Chklist']);
        Permission::updateOrCreate( [ 'name' => __( "Update chklist")], [ 'group' => 'Chklist']);
        Permission::updateOrCreate( [ 'name' => __( "Delete chklist")], [ 'group' => 'Chklist']);

        //Eventos
        Permission::updateOrCreate( [ 'name' => __( "View document events")], [ 'group' => 'Eventos']);
        Permission::updateOrCreate( [ 'name' => __( "Create document events")], [ 'group' => 'Eventos']);
        Permission::updateOrCreate( [ 'name' => __( "Update document events")], [ 'group' => 'Eventos']);
        Permission::updateOrCreate( [ 'name' => __( "Delete document events")], [ 'group' => 'Eventos']);
        Permission::updateOrCreate( [ 'name' => __( "View events locations")], [ 'group' => 'Eventos']);
        Permission::updateOrCreate( [ 'name' => __( "Create events locations")], [ 'group' => 'Eventos']);
        Permission::updateOrCreate( [ 'name' => __( "Update events locations")], [ 'group' => 'Eventos']);
        Permission::updateOrCreate( [ 'name' => __( "Delete events locations")], [ 'group' => 'Eventos']);

        //Corporativos
        Permission::updateOrCreate( [ 'name' => __( "View document clients")], [ 'group' => 'Corporativos']);
        Permission::updateOrCreate( [ 'name' => __( "Create document clients")], [ 'group' => 'Corporativos']);
        Permission::updateOrCreate( [ 'name' => __( "Update document clients")], [ 'group' => 'Corporativos']);
        Permission::updateOrCreate( [ 'name' => __( "Delete document clients")], [ 'group' => 'Corporativos']);
        Permission::updateOrCreate( [ 'name' => __( "View list clients")], [ 'group' => 'Corporativos']);
        Permission::updateOrCreate( [ 'name' => __( "Create clients")], [ 'group' => 'Corporativos']);
        Permission::updateOrCreate( [ 'name' => __( "Update clients")], [ 'group' => 'Corporativos']);
        Permission::updateOrCreate( [ 'name' => __( "Delete clients")], [ 'group' => 'Corporativos']);
        Permission::updateOrCreate(['name' => __("View customer compliance")], ['group' => 'Corporativos']);
        Permission::updateOrCreate(['name' => __("Export customer compliance")], ['group' => 'Corporativos']);

        //Contratos Corporativo
        Permission::updateOrCreate( [ 'name' => __( "View Customer contracts")], [ 'group' => 'Contratos Corporativo']);
        Permission::updateOrCreate( [ 'name' => __( "Create Customer contracts")], [ 'group' => 'Contratos Corporativo']);
        Permission::updateOrCreate( [ 'name' => __( "Update Customer contracts")], [ 'group' => 'Contratos Corporativo']);
        Permission::updateOrCreate( [ 'name' => __( "Delete Customer contracts")], [ 'group' => 'Contratos Corporativo']);
        Permission::updateOrCreate( [ 'name' => __( "Ver visor de contratos clientes")], [ 'group' => 'Contratos Corporativo']);
        Permission::updateOrCreate( [ 'name' => __( "Exportar visor de contratos clientes")], [ 'group' => 'Contratos Corporativo']);

        //Contactos
        Permission::updateOrCreate( [ 'name' => __( "View contacts")], [ 'group' => 'Contactos']);
        Permission::updateOrCreate( [ 'name' => __( "Create contacts")], [ 'group' => 'Contactos']);
        Permission::updateOrCreate( [ 'name' => __( "Update contacts")], [ 'group' => 'Contactos']);
        Permission::updateOrCreate( [ 'name' => __( "Delete contacts")], [ 'group' => 'Contactos']);

        //Comentarios
        Permission::updateOrCreate( [ 'name' => __( "Export Reports Comments")], [ 'group' => 'Comentarios']);
        Permission::updateOrCreate( [ 'name' => __( "View Report Comments")], [ 'group' => 'Comentarios']);
        Permission::updateOrCreate( [ 'name' => __( "View comments")], [ 'group' => 'Comentarios']);
        Permission::updateOrCreate( [ 'name' => __( "Create comments")], [ 'group' => 'Comentarios']);
        Permission::updateOrCreate( [ 'name' => __( "Update comments")], [ 'group' => 'Comentarios']);
        Permission::updateOrCreate( [ 'name' => __( "Delete comments")], [ 'group' => 'Comentarios']);
        Permission::updateOrCreate( [ 'name' => __( "Export comments")], [ 'group' => 'Comentarios']);

        //Ubicaciones
        Permission::updateOrCreate( [ 'name' => __( "Download locations to excel")], [ 'group' => 'Ubicaciones']);
        Permission::updateOrCreate( [ 'name' => __( "View locations")], [ 'group' => 'Ubicaciones']);
        Permission::updateOrCreate( [ 'name' => __( "Create locations")], [ 'group' => 'Ubicaciones']);
        Permission::updateOrCreate( [ 'name' => __( "Update locations")], [ 'group' => 'Ubicaciones']);
        Permission::updateOrCreate( [ 'name' => __( "Delete locations")], [ 'group' => 'Ubicaciones']);

        //Cumplimiento
        Permission::updateOrCreate( [ 'name' => __( "Ver Cumplimiento Histórico")], [ 'group' => 'Cumplimiento']);
        Permission::updateOrCreate( [ 'name' => __( "Ver Vencimiento de documentos")], [ 'group' => 'Cumplimiento']);
        Permission::updateOrCreate( [ 'name' => __( "Exportar Vencimientos")], [ 'group' => 'Cumplimiento']);
        Permission::updateOrCreate( [ 'name' => __( "Enviar a la lista distribucion")], [ 'group' => 'Cumplimiento']);
        Permission::updateOrCreate( [ 'name' => __( "View compliance reporting")], [ 'group' => 'Cumplimiento']);

        //Servicios
        Permission::updateOrCreate( [ 'name' => __( "View products")], [ 'group' => 'Servicios']);
        Permission::updateOrCreate( [ 'name' => __( "Create products")], [ 'group' => 'Servicios']);
        Permission::updateOrCreate( [ 'name' => __( "Update products")], [ 'group' => 'Servicios']);
        Permission::updateOrCreate( [ 'name' => __( "Delete products")], [ 'group' => 'Servicios']);

        //Servicios por puestos
        Permission::updateOrCreate( [ 'name' => __( "View Services per position")], [ 'group' => 'Servicios por puestos']);
        Permission::updateOrCreate( [ 'name' => __( "Create Services per position")], [ 'group' => 'Servicios por puestos']);
        Permission::updateOrCreate( [ 'name' => __( "Update Services per position")], [ 'group' => 'Servicios por puestos']);
        Permission::updateOrCreate( [ 'name' => __( "Delete Services per position")], [ 'group' => 'Servicios por puestos']);

        //Puestos
        Permission::updateOrCreate( [ 'name' => __( "Export positions")], [ 'group' => 'Puestos']);
        Permission::updateOrCreate( [ 'name' => __( "View positions")], [ 'group' => 'Puestos']);
        Permission::updateOrCreate( [ 'name' => __( "Create positions")], [ 'group' => 'Puestos']);
        Permission::updateOrCreate( [ 'name' => __( "Update positions")], [ 'group' => 'Puestos']);
        Permission::updateOrCreate( [ 'name' => __( "Delete positions")], [ 'group' => 'Puestos']);

        //Turnos
        Permission::updateOrCreate( [ 'name' => __( "View shifts")], [ 'group' => 'Turnos']);
        Permission::updateOrCreate( [ 'name' => __( "Create shifts")], [ 'group' => 'Turnos']);
        Permission::updateOrCreate( [ 'name' => __( "Update shifts")], [ 'group' => 'Turnos']);
        Permission::updateOrCreate( [ 'name' => __( "Delete shifts")], [ 'group' => 'Turnos']);

        //Zonas
        Permission::updateOrCreate( [ 'name' => __( "View zones")], [ 'group' => 'Zonas']);
        Permission::updateOrCreate( [ 'name' => __( "Create zones")], [ 'group' => 'Zonas']);
        Permission::updateOrCreate( [ 'name' => __( "Actualizar zonas")], [ 'group' => 'Zonas']);
        Permission::updateOrCreate( [ 'name' => __( "Borrar zonas")], [ 'group' => 'Zonas']);
        Permission::updateOrCreate( [ 'name' => __( "Descargar zonas a excel")], [ 'group' => 'Zonas']);

        //Claves
        Permission::updateOrCreate( [ 'name' => __( "View keys")], [ 'group' => 'Claves']);
        Permission::updateOrCreate( [ 'name' => __( "Create keys")], [ 'group' => 'Claves']);
        Permission::updateOrCreate( [ 'name' => __( "Update keys")], [ 'group' => 'Claves']);
        Permission::updateOrCreate( [ 'name' => __( "Delete keys")], [ 'group' => 'Claves']);

        //Unidades
        Permission::updateOrCreate( [ 'name' => __( "View units")], [ 'group' => 'Unidades']);
        Permission::updateOrCreate( [ 'name' => __( "Create units")], [ 'group' => 'Unidades']);
        Permission::updateOrCreate( [ 'name' => __( "Update units")], [ 'group' => 'Unidades']);
        Permission::updateOrCreate( [ 'name' => __( "Delete units")], [ 'group' => 'Unidades']);
        Permission::updateOrCreate( [ 'name' => __( "Export units")], [ 'group' => 'Unidades']);

        //Cuestionarios
        Permission::updateOrCreate( [ 'name' => __( "View questionnaires")], [ 'group' => 'Cuestionarios']);
        Permission::updateOrCreate( [ 'name' => __( "Create questionnaires")], [ 'group' => 'Cuestionarios']);
        Permission::updateOrCreate( [ 'name' => __( "Update questionnaires")], [ 'group' => 'Cuestionarios']);
        Permission::updateOrCreate( [ 'name' => __( "Delete questionnaires")], [ 'group' => 'Cuestionarios']);
        Permission::updateOrCreate( [ 'name' => __( "View responses questions")], [ 'group' => 'Cuestionarios']);
        Permission::updateOrCreate( [ 'name' => __( "Export responses questions")], [ 'group' => 'Cuestionarios']);

        //Rondineros
        Permission::updateOrCreate( [ 'name' => __( "View rondineros")], [ 'group' => 'Rondineros']);
        Permission::updateOrCreate( [ 'name' => __( "Create rondineros")], [ 'group' => 'Rondineros']);
        Permission::updateOrCreate( [ 'name' => __( "Update rondineros")], [ 'group' => 'Rondineros']);
        Permission::updateOrCreate( [ 'name' => __( "Delete rondineros")], [ 'group' => 'Rondineros']);

        //Ubicaciones activas
        Permission::updateOrCreate( [ 'name' => __( "View locations state")], [ 'group' => 'Ubicaciones activas']);
        Permission::updateOrCreate( [ 'name' => __( "Create locations state")], [ 'group' => 'Ubicaciones activas']);
        Permission::updateOrCreate( [ 'name' => __( "Update locations state")], [ 'group' => 'Ubicaciones activas']);
        Permission::updateOrCreate( [ 'name' => __( "Delete locations state")], [ 'group' => 'Ubicaciones activas']);

        //Requerimientos
        Permission::updateOrCreate( [ 'name' => __( "View requirements")], [ 'group' => 'Requerimientos']);
        Permission::updateOrCreate( [ 'name' => __( "Create requirements")], [ 'group' => 'Requerimientos']);
        Permission::updateOrCreate( [ 'name' => __( "Update requirements")], [ 'group' => 'Requerimientos']);
        Permission::updateOrCreate( [ 'name' => __( "Delete requirements")], [ 'group' => 'Requerimientos']);
        Permission::updateOrCreate( [ 'name' => __( "Export requirements")], [ 'group' => 'Requerimientos']);


        //Generador de reportes
        Permission::updateOrCreate( [ 'name' => __( "View report generator")], [ 'group' => 'Generador de reportes']);
        Permission::updateOrCreate( [ 'name' => __( "Create report generator")], [ 'group' => 'Generador de reportes']);
        Permission::updateOrCreate( [ 'name' => __( "Update report generator")], [ 'group' => 'Generador de reportes']);
        Permission::updateOrCreate( [ 'name' => __( "Delete report generator")], [ 'group' => 'Generador de reportes']);

        //Asistencia vs Ubicacion
        Permission::updateOrCreate( [ 'name' => __( "View attendance and locations")], [ 'group' => 'Asistencia vs Ubicacion']);
        Permission::updateOrCreate( [ 'name' => __( "Export attendance and locations")], [ 'group' => 'Asistencia vs Ubicacion']);


        //Personas enroladas
        Permission::updateOrCreate( [ 'name' => __( "View enrolled persons")], [ 'group' => 'Personas enroladas']);
        Permission::updateOrCreate( [ 'name' => __( "Export enrolled persons")], [ 'group' => 'Personas enroladas']);

        //Scopes
        Permission::updateOrCreate( [ 'name' => __( "View scopes")], [ 'group' => 'Scopes']);
        Permission::updateOrCreate( [ 'name' => __( "Create scopes")], [ 'group' =>  'Scopes']);
        Permission::updateOrCreate( [ 'name' => __( "Update scopes")], [ 'group' =>  'Scopes']);
        Permission::updateOrCreate( [ 'name' => __( "Delete scopes")], [ 'group' =>  'Scopes']);


        //Access Scopes
        Permission::updateOrCreate( [ 'name' => __( "View access scopes")], [ 'group' => 'Access Scopes']);
        Permission::updateOrCreate( [ 'name' => __( "Create access scopes")], [ 'group' => 'Access Scopes']);
        Permission::updateOrCreate( [ 'name' => __( "Update access scopes")], [ 'group' => 'Access Scopes']);
        Permission::updateOrCreate( [ 'name' => __( "Delete access scopes")], [ 'group' => 'Access Scopes']);

        //Users
        Permission::updateOrCreate( [ 'name' => __( "View users")], [ 'group' => 'Usuarios'] );
        Permission::updateOrCreate( [ 'name' => __( "Crear usuarios")], [ 'group' => 'Usuarios'] );
        Permission::updateOrCreate( [ 'name' => __( "Update users")], [ 'group' => 'Usuarios'] );
        Permission::updateOrCreate( [ 'name' => __( "Delete users")], [ 'group' => 'Usuarios'] );
        Permission::updateOrCreate( [ 'name' => __( "Assign user to role")], [ 'group' => 'Usuarios'] );
        Permission::updateOrCreate( [ 'name' => __( "Assign user to permission")], [ 'group' => 'Usuarios'] );

        //Distribuciones
        Permission::updateOrCreate( [ 'name' => __( "View distributions")], [ 'group' => 'Distribuciones']);
        Permission::updateOrCreate( [ 'name' => __( "Create distributions")], [ 'group' => 'Distribuciones']);
        Permission::updateOrCreate( [ 'name' => __( "Update distributions")], [ 'group' => 'Distribuciones']);
        Permission::updateOrCreate( [ 'name' => __( "Delete distributions")], [ 'group' => 'Distribuciones']);

        // Asistencias
        Permission::updateOrCreate( [ 'name' => __( "Create attendances")], [ 'group' => 'Asistencias']);
        Permission::updateOrCreate( [ 'name' => __( "Update attendances")], [ 'group' => 'Asistencias']);
        Permission::updateOrCreate( [ 'name' => __( "Delete attendances")], [ 'group' => 'Asistencias']);
        Permission::updateOrCreate( [ 'name' => __( "View attendance details")], [ 'group' => 'Asistencias']);
        Permission::updateOrCreate( [ 'name' => __( "View attendances")], [ 'group' => 'Asistencias']);
        Permission::updateOrCreate( [ 'name' => __( "Download attendances to excel")], [ 'group' => 'Asistencias']);
        Permission::updateOrCreate( [ 'name' => __( "View realtime attendances")], [ 'group' => 'Asistencias']);


        //Bitacora de asistencia
        Permission::updateOrCreate( [ 'name' => __( "View Log Attendances")], [ 'group' => 'Bitacora de asistencia']);
        Permission::updateOrCreate( [ 'name' => __( "Export branch log pdf")], [ 'group' => 'Bitacora de asistencia']);
        Permission::updateOrCreate( [ 'name' => __( "Export attendance log html")], [ 'group' => 'Bitacora de asistencia']);
        Permission::updateOrCreate( [ 'name' => __( "Export attendance log pdf")], [ 'group' => 'Bitacora de asistencia']);

        // Ver permisos
        Permission::updateOrCreate( [ 'name' => __( "View permissons")], [ 'group' => 'Permisos']);


        //Horas Trabajadas
        Permission::updateOrCreate( [ 'name' => __( "View time logs")], [ 'group' => 'Horas Trabajadas']);
        Permission::updateOrCreate( [ 'name' => __( "Export time logs")], [ 'group' => 'Horas Trabajadas']);

        //Bitacoras de ubicacion
        Permission::updateOrCreate( [ 'name' => __( "View location log")], [ 'group' => 'Bitacoras de ubicacion']);
        Permission::updateOrCreate( [ 'name' => __( "Create location log")], [ 'group' => 'Bitacoras de ubicacion']);
        Permission::updateOrCreate( [ 'name' => __( "Update location log")], [ 'group' => 'Bitacoras de ubicacion']);
        Permission::updateOrCreate( [ 'name' => __( "Delete location log")], [ 'group' => 'Bitacoras de ubicacion']);
        Permission::updateOrCreate( [ 'name' => __( "Export location log pdf")], [ 'group' => 'Bitacoras de ubicacion']);
        Permission::updateOrCreate( [ 'name' => __( "Export location log cvs")], [ 'group' => 'Bitacoras de ubicacion']);


        //Bitacora de rondines
        Permission::updateOrCreate( [ 'name' => __( "View tour log")], [ 'group' => 'Bitacora de rondines']);
        Permission::updateOrCreate( [ 'name' => __( "Delete tour log")], [ 'group' => 'Bitacora de rondines']);
        Permission::updateOrCreate( [ 'name' => __( "Export tour log pdf")], [ 'group' => 'Bitacora de rondines']);
        Permission::updateOrCreate( [ 'name' => __( "Export tour log cvs")], [ 'group' => 'Bitacora de rondines']);

        // Bitacora de unidades
        Permission::updateOrCreate( [ 'name' => __( "View unit log")], [ 'group' => 'Bitacora de unidades']);
        Permission::updateOrCreate( [ 'name' => __( "Create unit log")], [ 'group' => 'Bitacora de unidades'] );
        Permission::updateOrCreate( [ 'name' => __( "Update unit log")], [ 'group' => 'Bitacora de unidades'] );
        Permission::updateOrCreate( [ 'name' => __( "Delete unit log")], [ 'group' => 'Bitacora de unidades'] );
        Permission::updateOrCreate( [ 'name' => __( "Export unit log pdf")], [ 'group' => 'Bitacora de unidades'] );
        Permission::updateOrCreate( [ 'name' => __( "Export unit log cvs")], [ 'group' => 'Bitacora de unidades'] );

        //Entrega de turnos
        Permission::updateOrCreate( [ 'name' => __( "View delivery shifts")], [ 'group' => 'Entrega de turnos'] );
        Permission::updateOrCreate( [ 'name' => __( "Create delivery shifts")], [ 'group' => 'Entrega de turnos'] );
        Permission::updateOrCreate( [ 'name' => __( "Update delivery shifts")], [ 'group' => 'Entrega de turnos'] );
        Permission::updateOrCreate( [ 'name' => __( "Delete delivery shifts")], [ 'group' => 'Entrega de turnos'] );
        Permission::updateOrCreate( [ 'name' => __( "Export delivery shifts")], [ 'group' => 'Entrega de turnos'] );
        Permission::updateOrCreate( [ 'name' => __( "View report of shifts worked")], [ 'group' => 'Entrega de turnos'] );

        //Visitas
        Permission::updateOrCreate( [ 'name' => __( "View visits")], [ 'group' => 'Visitas'] );
        Permission::updateOrCreate( [ 'name' => __( "Enroll visitors")], [ 'group' => 'Visitas'] );
        Permission::updateOrCreate( [ 'name' => __( "Create visits")], [ 'group' => 'Visitas'] );
        Permission::updateOrCreate( [ 'name' => __( "Update visits")], [ 'group' => 'Visitas'] );
        Permission::updateOrCreate( [ 'name' => __( "Delete visits")], [ 'group' => 'Visitas'] );
        Permission::updateOrCreate( [ 'name' => __( "Export visits to pdf")], [ 'group' => 'Visitas'] );
        Permission::updateOrCreate( [ 'name' => __( "Export visits to cvs")], [ 'group' => 'Visitas'] );


        Permission::updateOrCreate( [ 'name' => __( "View documents units")], [ 'group' => 'Documentos de unidades'] );
        Permission::updateOrCreate( [ 'name' => __( "Create documents units")], [ 'group' =>  'Documentos de unidades'] );
        Permission::updateOrCreate( [ 'name' => __( "Update documents units")], [ 'group' =>  'Documentos de unidades'] );
        Permission::updateOrCreate( [ 'name' => __( "Delete documents units")], [ 'group' =>  'Documentos de unidades'] );


        //Control de presencia
        Permission::updateOrCreate( [ 'name' => __( "View time and attendance control")], [ 'group' => 'Control de presencia'] );
        Permission::updateOrCreate( [ 'name' => __( "Export time and attendance control")], [ 'group' => 'Control de presencia'] );

        //Pais
        Permission::updateOrCreate( [ 'name' => __( "View country")], [ 'group' => 'Pais'] );
        Permission::updateOrCreate( [ 'name' => __( "Create country")], [ 'group' =>  'Pais'] );
        Permission::updateOrCreate( [ 'name' => __( "Update country")], [ 'group' =>  'Pais'] );
        Permission::updateOrCreate( [ 'name' => __( "Delete country")], [ 'group' =>  'Pais'] );



        //Estado
        Permission::updateOrCreate( [ 'name' => __( "View state")], [ 'group' => 'Estado'] );
        Permission::updateOrCreate( [ 'name' => __( "Create state")], [ 'group' => 'Estado'] );
        Permission::updateOrCreate( [ 'name' => __( "Update state")], [ 'group' => 'Estado'] );
        Permission::updateOrCreate( [ 'name' => __( "Delete state")], [ 'group' => 'Estado'] );

        //Municipio
        Permission::updateOrCreate( [ 'name' => __( "View municipality")], [ 'group' => 'Municipio'] );
        Permission::updateOrCreate( [ 'name' => __( "Create municipality")], [ 'group' => 'Municipio'] );
        Permission::updateOrCreate( [ 'name' => __( "Update municipality")], [ 'group' => 'Municipio'] );
        Permission::updateOrCreate( [ 'name' => __( "Delete municipality")], [ 'group' => 'Municipio'] );

        //Ambientes
        Permission::updateOrCreate( [ 'name' => __( "Bitamovil Login")], [ 'group' => 'Ambientes'] );
        Permission::updateOrCreate( [ 'name' => __( "FACEiT Login")], [ 'group' => 'Ambientes'] );

        //Salario
        Permission::updateOrCreate( [ 'name' => __( "View salaries")], [ 'group' => 'Salario'] );
        Permission::updateOrCreate( [ 'name' => __( "Create salaries")], [ 'group' => 'Salario'] );
        Permission::updateOrCreate( [ 'name' => __( "Update salaries")], [ 'group' => 'Salario'] );
        Permission::updateOrCreate( [ 'name' => __( "Delete salaries")], [ 'group' => 'Salario'] );

        //Formacion
        Permission::updateOrCreate( [ 'name' => __( "View trainings")], [ 'group' => 'Formacion'] );
        Permission::updateOrCreate( [ 'name' => __( "Create trainings")], [ 'group' => 'Formacion'] );
        Permission::updateOrCreate( [ 'name' => __( "Update trainings")], [ 'group' => 'Formacion'] );
        Permission::updateOrCreate( [ 'name' => __( "Delete trainings")], [ 'group' => 'Formacion'] );


        //Persona Documento
        Permission::updateOrCreate( [ 'name' => __( "View document persons")], [ 'group' => 'Persona Documento'] );
        Permission::updateOrCreate( [ 'name' => __( "Create document persons")], [ 'group' => 'Persona Documento'] );
        Permission::updateOrCreate( [ 'name' => __( "Update document persons")], [ 'group' => 'Persona Documento'] );
        Permission::updateOrCreate( [ 'name' => __( "Delete document persons")], [ 'group' => 'Persona Documento'] );

        //Vacaciones
        Permission::updateOrCreate( [ 'name' => __( "View vacations")], [ 'group' => 'Vacaciones'] );
        Permission::updateOrCreate( [ 'name' => __( "Create vacations")], [ 'group' => 'Vacaciones'] );
        Permission::updateOrCreate( [ 'name' => __( "Update vacations")], [ 'group' => 'Vacaciones'] );
        Permission::updateOrCreate( [ 'name' => __( "Delete vacations")], [ 'group' => 'Vacaciones'] );

        //Dispositivos
        Permission::updateOrCreate( [ 'name' => __( "View machines")], [ 'group' => 'Dispositivos'] );
        Permission::updateOrCreate( [ 'name' => __( "Create machines")], [ 'group' => 'Dispositivos'] );
        Permission::updateOrCreate( [ 'name' => __( "Update machines")], [ 'group' => 'Dispositivos'] );
        Permission::updateOrCreate( [ 'name' => __( "Delete machines")], [ 'group' => 'Dispositivos'] );
        Permission::updateOrCreate( [ 'name' => __( "Manage devices")], [ 'group' => 'Dispositivos'] );
        Permission::updateOrCreate( [ 'name' => __( "Manage downloads")], [ 'group' => 'Dispositivos'] );
        Permission::updateOrCreate( [ 'name' => __( "Manage API tokens")], [ 'group' => 'Dispositivos'] );


        Permission::updateOrCreate( [ 'name' => __( "View metrics")], [ 'group' => 'Dashboard'] );

        //Regionalizacion
        Permission::updateOrCreate( [ 'name' => __( "View zone adresses")], [ 'group' => 'Regionalizacion'] );
        Permission::updateOrCreate( [ 'name' => __( "Create zone adresses")], [ 'group' => 'Regionalizacion'] );
        Permission::updateOrCreate( [ 'name' => __( "Update zone adresses")], [ 'group' => 'Regionalizacion'] );
        Permission::updateOrCreate( [ 'name' => __( "Delete zone adresses")], [ 'group' => 'Regionalizacion'] );

        //Persona Estado
        Permission::updateOrCreate( [ 'name' => __( "View persons state")], [ 'group' => 'Persona Estado'] );
        Permission::updateOrCreate( [ 'name' => __( "Create persons state")], [ 'group' => 'Persona Estado'] );
        Permission::updateOrCreate( [ 'name' => __( "Update persons state")], [ 'group' => 'Persona Estado'] );
        Permission::updateOrCreate( [ 'name' => __( "Delete persons state")], [ 'group' => 'Persona Estado'] );

        //Asignacion
        Permission::updateOrCreate( [ 'name' => __( "Ver asignacion")], [ 'group' => 'Asignacion'] );
        Permission::updateOrCreate( [ 'name' => __( "Crear asignacion")], [ 'group' => 'Asignacion'] );
        Permission::updateOrCreate( [ 'name' => __( "Actualizar asignacion")], [ 'group' => 'Asignacion'] );
        Permission::updateOrCreate( [ 'name' => __( "Eliminar asignacion")], [ 'group' => 'Asignacion'] );
        Permission::updateOrCreate( [ 'name' => __( "Crear eventos de asignacion")], [ 'group' => 'Asignacion'] );
        Permission::updateOrCreate( [ 'name' => __( "Actualizar eventos de asignacion")], [ 'group' => 'Asignacion'] );
        Permission::updateOrCreate( [ 'name' => __( "Eliminar eventos de asignacion")], [ 'group' => 'Asignacion'] );
        Permission::updateOrCreate( [ 'name' => __( "Cambiar status asignacion")], [ 'group' => 'Asignacion'] );
        Permission::updateOrCreate( [ 'name' => __( "Ver visor de asignacion de servicio")], [ 'group' => 'Asignacion'] );

        //Servicio de Asignacion
        Permission::updateOrCreate( [ 'name' => __( "Ver servicio de asignacion")], [ 'group' => 'Servicio de Asignacion'] );
        Permission::updateOrCreate( [ 'name' => __( "Crear servicio de asignacion")], [ 'group' => 'Servicio de Asignacion'] );
        Permission::updateOrCreate( [ 'name' => __( "Actualizar servicio de asignacion")], [ 'group' => 'Servicio de Asignacion'] );
        Permission::updateOrCreate( [ 'name' => __( "Eliminar servicio de asignacion")], [ 'group' => 'Servicio de Asignacion'] );
        Permission::updateOrCreate( [ 'name' => __( "Cambiar status servicio de asignacion")], [ 'group' => 'Servicio de Asignacion'] );

        //Roles
        Permission::updateOrCreate( [ 'name' => __( "View roles")], [ 'group' => 'Roles'] );
        Permission::updateOrCreate( [ 'name' => __( "Create roles")], [ 'group' => 'Roles'] );
        Permission::updateOrCreate( [ 'name' => __( "Update roles")], [ 'group' => 'Roles'] );
        Permission::updateOrCreate( [ 'name' => __( "Delete roles")], [ 'group' => 'Roles'] );
        Permission::updateOrCreate( [ 'name' => __( "Assign role to user")], [ 'group' => 'Roles'] );
        Permission::updateOrCreate( [ 'name' => __( "View permissions")], [ 'group' => 'Roles'] );

        //Personas tipos
        Permission::updateOrCreate( [ 'name' => __( "View person types")], [ 'group' => 'Personas tipos'] );
        Permission::updateOrCreate( [ 'name' => __( "Create person types")], [ 'group' => 'Personas tipos'] );
        Permission::updateOrCreate( [ 'name' => __( "Update person types")], [ 'group' => 'Personas tipos'] );
        Permission::updateOrCreate( [ 'name' => __( "Delete person types")], [ 'group' => 'Personas tipos'] );

        //Personas
        Permission::updateOrCreate( [ 'name' => __( "View persons")], [ 'group' => 'Personas'] );
        Permission::updateOrCreate( [ 'name' => __( "Create persons")], [ 'group' => 'Personas'] );
        Permission::updateOrCreate( [ 'name' => __( "Update persons")], [ 'group' => 'Personas'] );
        Permission::updateOrCreate( [ 'name' => __( "Delete persons")], [ 'group' => 'Personas'] );
        Permission::updateOrCreate( [ 'name' => __( "Download persons to excel")], [ 'group' => 'Personas'] );


    }
}