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
 * Strings for component 'zoom', language 'es', version '3.10'.
 *
 * @package     zoom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['addtocalendar'] = 'Añadir al calendario';
$string['allmeetings'] = 'Todas las reuniones';
$string['alternative_hosts'] = 'Hosts alternativos';
$string['alternative_hosts_help'] = 'La opción de host alternativo le permite planificar las reuniones y designar otro usuario Pro en la misma cuenta para que inicie la reunión o webinar si usted no puede hacerlo. El usuario recibirá un Email notificándole que ha sido añadido como un host alternativo, junto con un enlace para iniciar la reunión. Puede separar varios emails con coma (sin espacios).';
$string['apikey'] = 'Zoom API Key';
$string['apisecret'] = 'Zoom API secret';
$string['apiurl'] = 'Zoom API url';
$string['audio_both'] = 'VoIP y Telefonía';
$string['audio_telephony'] = 'Solo telefonía';
$string['audio_voip'] = 'Solo VoIP';
$string['cachedef_sessions'] = 'Información de la solicitud para obtener reporte de usuario de zoom';
$string['cachedef_zoomid'] = 'El ID de usuario Zoom';
$string['calendardescriptionURL'] = 'URL para unirse a reunión: {$a}.';
$string['calendardescriptionintro'] = '\\nDescripción:\\n{\\$a}';
$string['calendariconalt'] = 'Icono del calendario';
$string['changehost'] = 'Cambiar anfitrión';
$string['clickjoin'] = 'Botón para unirse a la reunión presionando';
$string['connectionfailed'] = 'Conexión fallida:';
$string['connectionok'] = 'Conexión funcionando.';
$string['connectionstatus'] = 'Estado de la conexión';
$string['defaultsettings'] = 'Configuración por defecto de Zoom';
$string['defaultsettings_help'] = 'Estas configuraciones definen los valores por defecto para todas las reuniones Zoom y webinars.';
$string['downloadical'] = 'Descargar iCal';
$string['duration'] = 'Duración (minutos)';
$string['endtime'] = 'Hora de finalización';
$string['err_duration_nonpositive'] = 'La duración debe ser positiva.';
$string['err_duration_too_long'] = 'La duración no puede exceder 150 horas.';
$string['err_invalid_password'] = 'La contraseña tiene caracteres inválidos.';
$string['err_long_timeframe'] = 'Franja horaria solicitada demasiada larga, mostrando resultados del último mes dentro del rango.';
$string['err_password'] = 'La contraseña solamente puede contener los siguientes caracteres: [a-z A-Z 0-9 @ - _ *]. Máximo 10 caracteres.';
$string['err_password_required'] = 'La contraseña está marcada como obligatoria pero el campo está vacío.';
$string['err_start_time_past'] = 'La fecha de inicio no puede ser anterior a la actual';
$string['errorwebservice'] = 'Error del servicio web de Zoom: {$a}.';
$string['errorwebservice_badrequest'] = 'Zoom recibió una solicitud incorrecta: {$a}';
$string['errorwebservice_notfound'] = 'El recurso no existe: {$a}';
$string['export'] = 'Exportar';
$string['firstjoin'] = 'El primero que pueda unirse';
$string['firstjoin_desc'] = 'Lo más temprano que un usuario puede unirse a una reunión planificada (minutos antes del inicio).';
$string['getmeetingreports'] = 'Obtener el reporte de reunión de Zoom';
$string['host'] = 'Anfitrión';
$string['invalid_status'] = 'Estado invalido, revisar la base de datos.';
$string['invalidscheduleuser'] = 'No se puede programar para el usuario especificado.';
$string['join'] = 'Unirse';
$string['join_meeting'] = 'Unirse a la reunión';
$string['joinbeforehost'] = 'Unirse a la reunión antes que el anfitrión.';
$string['jointime'] = 'Hora de reunirse';
$string['leavetime'] = 'Hora de retirarse';
$string['licenseonjoin'] = 'Seleccione esta opción si desea que el anfitrión reciba una licencia al comenzar la reunión, <i>así como</i> al momento de su creación.';
$string['licensesnumber'] = 'Número de licencias';
$string['lowlicenses'] = 'Si el número de sus licencias excede las requeridas, cuando cree cada nueva actividad por el usuario, se le asignará una licencia PRO al reducir el estado de otro usuario. La opción es efectiva cuando el número de licencias PRO activas es superior a 5.';
$string['maskparticipantdata'] = 'Enmascarar datos de participantes';
$string['maskparticipantdata_help'] = 'Evita que los datos de los participantes aparezcan en los informes (útil para sitios que enmascaran los datos de los participantes, por ejemplo, para HIPAA).';
$string['meeting_finished'] = 'Finalizado';
$string['meeting_nonexistent_on_zoom'] = 'Inexistente en Zoom';
$string['meeting_not_started'] = 'No iniciado';
$string['meeting_started'] = 'En progreso';
$string['meeting_time'] = 'Hora de empezar';
$string['modulename'] = 'Reunión de Zoom';
$string['modulename_help'] = 'Zoom es una plataforma web y videoconferencia que le proporciona a los usuarios autorizados la habilidad para organizar reuniones en línea.';
$string['modulenameplural'] = 'Reuniones de Zoom';
$string['newmeetings'] = 'Nuevas reuniones';
$string['nomeetinginstances'] = 'No se encontraron sesiones para esta reunión.';
$string['noparticipants'] = 'No se encontraron participantes para esta sesión en este momento.';
$string['nosessions'] = 'No se encontraron sesiones para el rango especificado.';
$string['nozooms'] = 'No hay reuniones';
$string['off'] = 'Desconectado';
$string['oldmeetings'] = 'Reuniones concluidas.';
$string['on'] = 'Activo';
$string['option_audio'] = 'Opciones de audio';
$string['option_authenticated_users'] = 'Solamente usuarios autenticados';
$string['option_host_video'] = 'Alojar video';
$string['option_jbh'] = 'Permitir unirse antes que el anfitrión';
$string['option_mute_upon_entry'] = 'Silenciar al entrar';
$string['option_mute_upon_entry_help'] = 'Silencia automáticamente a todos los participantes cuando se unen a la reunión. El anfitrión controla si los participantes pueden activar el micrófono.';
$string['option_participants_video'] = 'Participantes en video';
$string['option_proxyhost'] = 'Usar proxy';
$string['option_proxyhost_desc'] = 'El proxy configurado aquí como \'<code>&lt;hostname&gt;:&lt;port&gt;</code>\' se usa solo para comunicarse con Zoom. Déjelo en blanco para usar la configuración de proxy predeterminada de Moodle. Solo necesita configurar esto si no desea configurar un proxy global en Moodle.';
$string['option_waiting_room'] = 'Habilitar sala de espera';
$string['participantdatanotavailable'] = 'Detalles no disponibles';
$string['participantdatanotavailable_help'] = 'Los datos de los participantes no están disponibles para esta sesión de Zoom (p. Ej., Debido al cumplimiento de HIPAA).';
$string['participants'] = 'Participantes';
$string['password'] = 'Contraseña';
$string['passwordprotected'] = 'Contraseña protegida';
$string['pluginadministration'] = 'Administrar reuniones Zoom';
$string['pluginname'] = 'Reunión Zoom';
$string['privacy:metadata:zoom_meeting_details'] = 'La tabla de la base de datos que almacena la información acerca de cada instancia de reunión.';
$string['privacy:metadata:zoom_meeting_details:topic'] = 'El nombre de la reunión que el usuario asistió.';
$string['privacy:metadata:zoom_meeting_participants'] = 'La tabla de base de datos que almacena la información acerca de los participantes de la reunión.';
$string['privacy:metadata:zoom_meeting_participants:duration'] = 'Cuanto tiempo estuvo el participante en la reunión';
$string['privacy:metadata:zoom_meeting_participants:join_time'] = 'El tiempo que el participante se unió a la reunión';
$string['privacy:metadata:zoom_meeting_participants:leave_time'] = 'El tiempo que el participante abandonó la reunión.';
$string['privacy:metadata:zoom_meeting_participants:name'] = 'El nombre del participante';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = 'El email del participante';
$string['recurringmeeting'] = 'Recurrente';
$string['recurringmeeting_help'] = 'No tiene fecha de fin';
$string['recurringmeetinglong'] = 'Reunión recurrente (reunión sin fecha ni hora de término)';
$string['recycleonjoin'] = 'Recicle la licencia al unirse';
$string['redefinelicenses'] = 'Licencias redefinidas';
$string['report'] = 'Reportes';
$string['reportapicalls'] = 'Llamadas a reportes API agotadas';
$string['resetapicalls'] = 'Reiniciar el número de llamadas API';
$string['schedulefor'] = 'Programar reunión para';
$string['scheduleforself'] = 'Programe usted mismo';
$string['search:activity'] = 'Zoom - Informacion de actividad';
$string['sessions'] = 'Sesiones';
$string['start'] = 'Inicio';
$string['start_meeting'] = 'Iniciar reunión';
$string['start_time'] = 'Cuando';
$string['starthostjoins'] = 'Iniciar vídeo cuando el anfitrión se una';
$string['startpartjoins'] = 'Iniciar vídeo cuando el participante se una';
$string['starttime'] = 'Tiempo de iniciar';
$string['status'] = 'Estado';
$string['title'] = 'Título';
$string['topic'] = 'Tema';
$string['unavailable'] = 'No puede unirse en este momento';
$string['updatemeetings'] = 'Actualizar las opciones de la reunión en Zoom';
$string['usepersonalmeeting'] = 'Usar el ID de la reunión personal';
$string['waitingroom'] = 'Sala de espera habilitada';
$string['webinar'] = 'Webinar';
$string['webinar_already_false'] = '<p> <b> Este módulo ya estaba configurado como una reunión, no como un webinar. No puede alternar esta configuración después de crear la reunión. </b> </p>';
$string['webinar_already_true'] = '<p> <b> Este módulo ya estaba configurado como un webinar, no como una reunión. No puede alternar esta configuración después de crear el webinar. </b> </p>';
$string['webinar_help'] = 'Esta opción está sólo disponible para cuentas Zoom pre-autorizadas.';
$string['zoom:addinstance'] = 'Agregar una nueva reunión de Zoom';
$string['zoom:view'] = 'Ver las reuniones de Zoom';
$string['zoomerr'] = 'Se produjo un error con Zoom.';
$string['zoomerr_apikey_missing'] = 'Clave de la API de Zoom no encontrada.';
$string['zoomerr_apisecret_missing'] = 'API secreta de Zoom no encontrada.';
$string['zoomerr_id_missing'] = 'Debe especificar una ID de curso o un ID de instancia';
$string['zoomerr_licensesnumber_missing'] = 'Se encontró la configuración máxima de zoom, pero no se encontró la configuración del número de licencias';
$string['zoomerr_maxretries'] = 'Intenté {$a->maxretries} veces para realizar la llamada, pero falló: {$a->response}';
$string['zoomerr_meetingnotfound'] = 'Esta reunión no pudo ser encontrada. Puede <a href="{$a-> recrear} "> crearla nuevamente aquí </a> o <a href="{$a-> delete}"> eliminarla completamente </a>.';
$string['zoomerr_meetingnotfound_info'] = 'Esta reunión no pudo ser encontrada en Zoom. Por favor contacte con el anfitrión de la reunión si tiene preguntas.';
$string['zoomerr_usernotfound'] = 'No se puede encontrar su cuenta en Zoom. Si está utilizando Zoom por primera vez, debe ingresar en la cuenta iniciando sesión en Zoom <a href="{$a}" target="_blank">{$a}</a>. Una vez que haya activado su cuenta de Zoom, vuelva a cargar esta página y continúe configurando su reunión. De lo contrario, asegúrese de que su correo electrónico en Zoom coincida con su correo electrónico en este sistema.';
$string['zoomurl'] = 'Pagina principal de Zoom';
