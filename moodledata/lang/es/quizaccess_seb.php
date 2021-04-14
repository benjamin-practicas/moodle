<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'quizaccess_seb', language 'es', version '3.10'.
 *
 * @package     quizaccess_seb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtemplate'] = 'Añadir nueva plantilla';
$string['allowedbrowserkeysdistinct'] = 'Todas las claves deben ser diferentes.';
$string['allowedbrowserkeyssyntax'] = 'Una clave debería ser una cadena hexadecimal de 64 caracteres.';
$string['cachedef_config'] = 'Caché de configuración de SEB';
$string['cachedef_configkey'] = 'Caché de claves de configuración de SEB';
$string['cachedef_quizsettings'] = 'Caché de ajustes de cuestionario de SEB';
$string['cantdelete'] = 'La plantilla no puede eliminarse porque ha sido utilizada para uno o más cuestionarios.';
$string['cantedit'] = 'La plantilla no puede editarse porque ha sido utilizada para uno o más cuestionarios.';
$string['clientrequiresseb'] = 'Este cuestionario ha sido configurado para que se use Safe Exam Browser con la configuración del cliente.';
$string['confirmtemplateremovalquestion'] = '¿Está seguro de que quiere eliminar esta plantilla?';
$string['confirmtemplateremovaltitle'] = '¿Confirmar el borrado de la plantilla?';
$string['conflictingsettings'] = 'No tiene permiso para actualizar los ajustes actuales de Safe Exam Browser.';
$string['content'] = 'Plantilla';
$string['description'] = 'Descripción';
$string['disabledsettings'] = 'Configuraciones deshabilitadas.';
$string['disabledsettings_help'] = 'La configuración de Safe Exam Browser del cuestionario no pueden ser cambiada si el cuestionario ha sido realizado. Para cambiar la configuración, primero deben ser eliminados todos los intentos realizados.';
$string['downloadsebconfig'] = 'Descargar el archivo de configuración SEB';
$string['duplicatetemplate'] = 'Ya existe una plantilla con el mismo nombre.';
$string['edittemplate'] = 'Editar plantilla';
$string['enabled'] = 'Habilitado';
$string['event:accessprevented'] = 'Se impidió el acceso al cuestionario';
$string['event:templatecreated'] = 'La plantilla SEB fue creada';
$string['event:templatedeleted'] = 'La plantilla SEB fue borrada';
$string['event:templatedisabled'] = 'La plantilla SEB fue deshabilitada';
$string['event:templateenabled'] = 'La plantilla SEB fue habilitada';
$string['event:templateupdated'] = 'La plantilla SEB fue actualizada';
$string['exitsebbutton'] = 'Salir de Safe Exam Browser';
$string['filemanager_sebconfigfile'] = 'Subir el archivo de configuración de Safe Exam Browser';
$string['filemanager_sebconfigfile_help'] = 'Por favor suba su propio archivo de configuración de Safe Exam Browser para este cuestionario.';
$string['filenotpresent'] = 'Por favor suba un archivo de configuración de SEB.';
$string['fileparsefailed'] = 'El archivo subido no pudo ser guardado como un archivo de configuración SEB.';
$string['httplinkbutton'] = 'Descargar configuración';
$string['invalid_browser_key'] = 'Clave de navegador SEB inválida';
$string['invalid_config_key'] = 'Clave de configuración SEB inválida';
$string['invalidkeys'] = 'La clave de configuración o las claves del navegador seguro no han podido ser validadas. Por favor asegúrese de que está utilizando el fichero de configuración correcto de Safe Exam Browser.';
$string['invalidtemplate'] = 'Plantilla de configuración SEB no válida';
$string['manage_templates'] = 'Plantillas Safe Exam Browser';
$string['managetemplates'] = 'Administrar plantillas';
$string['missingrequiredsettings'] = 'Faltan algunos valores requeridos en los ajustes de configuración .';
$string['name'] = 'Nombre';
$string['newtemplate'] = 'Nueva plantilla';
$string['not_seb'] = 'No se está usando Safe Exam Browser.';
$string['notemplate'] = 'Sin plantilla';
$string['pluginname'] = 'Reglas de acceso de Safe Exam Browser';
$string['quizsettings'] = 'Configuración del cuestionario';
$string['seb_activateurlfiltering'] = 'Habilitar el filtrado de URL';
$string['seb_activateurlfiltering_help'] = 'Si está habilitado, las URLs se filtrarán al cargar páginas web. El conjunto de filtros debe definirse a continuación.';
$string['seb_allowedbrowserexamkeys'] = 'Claves del navegador seguro permitidas';
$string['seb_allowreloadinexam'] = 'Permitir recargar en el examen';
$string['seb_allowspellchecking'] = 'Habilitar revisión ortográfica';
$string['seb_allowspellchecking_help'] = 'Si está habilitado, se permite la revisión ortográfica en el navegador SEB.';
$string['seb_allowuserquitseb'] = 'Habilitar salir de SEB';
$string['seb_allowuserquitseb_help'] = 'Si está habilitado, los usuarios pueden salir de SEB con el botón "Salir" en la barra de tareas de SEB o presionando las teclas Ctrl-Q o pulsando el botón de cierre de la ventana principal del navegador.';
$string['seb_enableaudiocontrol'] = 'Habilitar controles de audio';
$string['seb_enableaudiocontrol_help'] = 'Si está habilitado, el icono control de audio se muestra en la barra de tareas de SEB.';
$string['seb_expressionsallowed'] = 'Expresiones permitidas';
$string['seb_expressionsblocked'] = 'Expresiones bloqueadas';
$string['seb_filterembeddedcontent'] = 'Filtrar también contenido incrustado';
$string['seb_help'] = 'Configurar cuestionario para utilizar Safe Exam Browser.';
$string['seb_linkquitseb'] = 'Mostrar el botón Salir de Safe Exam Browser, configurado con este enlace de salida';
$string['seb_muteonstartup'] = 'Silenciar al inicio';
$string['seb_muteonstartup_help'] = 'Si está habilitado, el audio se silencia inicialmente cuando comienza SEB.';
$string['seb_quitpassword'] = 'Contraseña del cuestionario';
$string['seb_regexallowed'] = 'Regex permitidas';
$string['seb_regexblocked'] = 'Regex bloqueadas';
$string['seb_requiresafeexambrowser'] = 'Requerir el uso de Safe Exam Browser';
$string['seb_showkeyboardlayout'] = 'Mostrar distribución de teclado';
$string['seb_showreloadbutton'] = 'Mostrar el botón de recarga';
$string['seb_showsebdownloadlink'] = 'Mostrar botón de descarga de Safe Exam Browser';
$string['seb_showsebtaskbar'] = 'Mostrar la barra de tareas de SEB';
$string['seb_showtime'] = 'Mostrar la hora';
$string['seb_showwificontrol'] = 'Mostrar control de Wi-Fi';
$string['seb_use_client'] = 'Sí - Utilizar la configuración del cliente SEB';
$string['seb_use_manually'] = 'Sí - Configurar manualmente';
$string['seb_use_template'] = 'Sí - Usar una plantilla existente';
$string['seb_use_upload'] = 'Sí - Cargar mi propia configuración';
$string['seb_userconfirmquit'] = 'Pedir al usuario que confirme la salida';
$string['sebdownloadbutton'] = 'Descargar Safe Exam Browser';
$string['seblinkbutton'] = 'Iniciar Safe Exam Browser';
$string['sebrequired'] = 'Este cuestionario ha sido configurado para que los estudiantes solo puedan realizarlo utilizando Safe Exam Browser.';
$string['setting:downloadlink'] = 'Enlace de descarga de Safe Exam Browser';
$string['setting:downloadlink_desc'] = 'URL para descargar la apicación de Safe Exam Browser.';
$string['settingsfrozen'] = 'Debido a que hubo al menos un intento de prueba, la configuración de Safe Exam Browser ya no se puede actualizar.';
$string['unknown_reason'] = 'Razón desconocida';
$string['used'] = 'En uso';
