<?

if (@constant('IPS_BASE') == null) //Nur wenn Konstanten noch nicht bekannt sind.
{
// --- BASE MESSAGE
    define('IPS_BASE', 10000);                             //Base Message
    define('IPS_KERNELSHUTDOWN', IPS_BASE + 1);            //Pre Shutdown Message, Runlevel UNINIT Follows
    define('IPS_KERNELSTARTED', IPS_BASE + 2);             //Post Ready Message
// --- KERNEL
    define('IPS_KERNELMESSAGE', IPS_BASE + 100);           //Kernel Message
    define('KR_CREATE', IPS_KERNELMESSAGE + 1);            //Kernel is beeing created
    define('KR_INIT', IPS_KERNELMESSAGE + 2);              //Kernel Components are beeing initialised, Modules loaded, Settings read
    define('KR_READY', IPS_KERNELMESSAGE + 3);             //Kernel is ready and running
    define('KR_UNINIT', IPS_KERNELMESSAGE + 4);            //Got Shutdown Message, unloading all stuff
    define('KR_SHUTDOWN', IPS_KERNELMESSAGE + 5);          //Uninit Complete, Destroying Kernel Inteface
// --- KERNEL LOGMESSAGE
    define('IPS_LOGMESSAGE', IPS_BASE + 200);              //Logmessage Message
    define('KL_MESSAGE', IPS_LOGMESSAGE + 1);              //Normal Message                      | FG: Black | BG: White  | STLYE : NONE
    define('KL_SUCCESS', IPS_LOGMESSAGE + 2);              //Success Message                     | FG: Black | BG: Green  | STYLE : NONE
    define('KL_NOTIFY', IPS_LOGMESSAGE + 3);               //Notiy about Changes                 | FG: Black | BG: Blue   | STLYE : NONE
    define('KL_WARNING', IPS_LOGMESSAGE + 4);              //Warnings                            | FG: Black | BG: Yellow | STLYE : NONE
    define('KL_ERROR', IPS_LOGMESSAGE + 5);                //Error Message                       | FG: Black | BG: Red    | STLYE : BOLD
    define('KL_DEBUG', IPS_LOGMESSAGE + 6);                //Debug Informations + Script Results | FG: Grey  | BG: White  | STLYE : NONE
    define('KL_CUSTOM', IPS_LOGMESSAGE + 7);               //User Message                        | FG: Black | BG: White  | STLYE : NONE
// --- MODULE LOADER
    define('IPS_MODULEMESSAGE', IPS_BASE + 300);           //ModuleLoader Message
    define('ML_LOAD', IPS_MODULEMESSAGE + 1);              //Module loaded
    define('ML_UNLOAD', IPS_MODULEMESSAGE + 2);            //Module unloaded
// --- OBJECT MANAGER
    define('IPS_OBJECTMESSAGE', IPS_BASE + 400);
    define('OM_REGISTER', IPS_OBJECTMESSAGE + 1);          //Object was registered
    define('OM_UNREGISTER', IPS_OBJECTMESSAGE + 2);        //Object was unregistered
    define('OM_CHANGEPARENT', IPS_OBJECTMESSAGE + 3);      //Parent was Changed
    define('OM_CHANGENAME', IPS_OBJECTMESSAGE + 4);        //Name was Changed
    define('OM_CHANGEINFO', IPS_OBJECTMESSAGE + 5);        //Info was Changed
    define('OM_CHANGETYPE', IPS_OBJECTMESSAGE + 6);        //Type was Changed
    define('OM_CHANGESUMMARY', IPS_OBJECTMESSAGE + 7);     //Summary was Changed
    define('OM_CHANGEPOSITION', IPS_OBJECTMESSAGE + 8);    //Position was Changed
    define('OM_CHANGEREADONLY', IPS_OBJECTMESSAGE + 9);    //ReadOnly was Changed
    define('OM_CHANGEHIDDEN', IPS_OBJECTMESSAGE + 10);     //Hidden was Changed
    define('OM_CHANGEICON', IPS_OBJECTMESSAGE + 11);       //Icon was Changed
    define('OM_CHILDADDED', IPS_OBJECTMESSAGE + 12);       //Child for Object was added
    define('OM_CHILDREMOVED', IPS_OBJECTMESSAGE + 13);     //Child for Object was removed
    define('OM_CHANGEIDENT', IPS_OBJECTMESSAGE + 14);      //Ident was Changed
// --- INSTANCE MANAGER
    define('IPS_INSTANCEMESSAGE', IPS_BASE + 500);         //Instance Manager Message
    define('IM_CREATE', IPS_INSTANCEMESSAGE + 1);          //Instance created
    define('IM_DELETE', IPS_INSTANCEMESSAGE + 2);          //Instance deleted
    define('IM_CONNECT', IPS_INSTANCEMESSAGE + 3);         //Instance connectged
    define('IM_DISCONNECT', IPS_INSTANCEMESSAGE + 4);      //Instance disconncted
    define('IM_CHANGESTATUS', IPS_INSTANCEMESSAGE + 5);    //Status was Changed
    define('IM_CHANGESETTINGS', IPS_INSTANCEMESSAGE + 6);  //Settings were Changed
    define('IM_CHANGESEARCH', IPS_INSTANCEMESSAGE + 7);    //Searching was started/stopped
    define('IM_SEARCHUPDATE', IPS_INSTANCEMESSAGE + 8);    //Searching found new results
    define('IM_SEARCHPROGRESS', IPS_INSTANCEMESSAGE + 9);  //Searching progress in %
    define('IM_SEARCHCOMPLETE', IPS_INSTANCEMESSAGE + 10); //Searching is complete
// --- VARIABLE MANAGER
    define('IPS_VARIABLEMESSAGE', IPS_BASE + 600);              //Variable Manager Message
    define('VM_CREATE', IPS_VARIABLEMESSAGE + 1);               //Variable Created
    define('VM_DELETE', IPS_VARIABLEMESSAGE + 2);               //Variable Deleted
    define('VM_UPDATE', IPS_VARIABLEMESSAGE + 3);               //On Variable Update
    define('VM_CHANGEPROFILENAME', IPS_VARIABLEMESSAGE + 4);    //On Profile Name Change
    define('VM_CHANGEPROFILEACTION', IPS_VARIABLEMESSAGE + 5);  //On Profile Action Change
// --- SCRIPT MANAGER
    define('IPS_SCRIPTMESSAGE', IPS_BASE + 700);           //Script Manager Message
    define('SM_CREATE', IPS_SCRIPTMESSAGE + 1);            //On Script Create
    define('SM_DELETE', IPS_SCRIPTMESSAGE + 2);            //On Script Delete
    define('SM_CHANGEFILE', IPS_SCRIPTMESSAGE + 3);        //On Script File changed
    define('SM_BROKEN', IPS_SCRIPTMESSAGE + 4);            //Script Broken Status changed
// --- EVENT MANAGER
    define('IPS_EVENTMESSAGE', IPS_BASE + 800);             //Event Scripter Message
    define('EM_CREATE', IPS_EVENTMESSAGE + 1);             //On Event Create
    define('EM_DELETE', IPS_EVENTMESSAGE + 2);             //On Event Delete
    define('EM_UPDATE', IPS_EVENTMESSAGE + 3);
    define('EM_CHANGEACTIVE', IPS_EVENTMESSAGE + 4);
    define('EM_CHANGELIMIT', IPS_EVENTMESSAGE + 5);
    define('EM_CHANGESCRIPT', IPS_EVENTMESSAGE + 6);
    define('EM_CHANGETRIGGER', IPS_EVENTMESSAGE + 7);
    define('EM_CHANGETRIGGERVALUE', IPS_EVENTMESSAGE + 8);
    define('EM_CHANGETRIGGEREXECUTION', IPS_EVENTMESSAGE + 9);
    define('EM_CHANGECYCLIC', IPS_EVENTMESSAGE + 10);
    define('EM_CHANGECYCLICDATEFROM', IPS_EVENTMESSAGE + 11);
    define('EM_CHANGECYCLICDATETO', IPS_EVENTMESSAGE + 12);
    define('EM_CHANGECYCLICTIMEFROM', IPS_EVENTMESSAGE + 13);
    define('EM_CHANGECYCLICTIMETO', IPS_EVENTMESSAGE + 14);
// --- MEDIA MANAGER
    define('IPS_MEDIAMESSAGE', IPS_BASE + 900);           //Media Manager Message
    define('MM_CREATE', IPS_MEDIAMESSAGE + 1);             //On Media Create
    define('MM_DELETE', IPS_MEDIAMESSAGE + 2);             //On Media Delete
    define('MM_CHANGEFILE', IPS_MEDIAMESSAGE + 3);         //On Media File changed
    define('MM_AVAILABLE', IPS_MEDIAMESSAGE + 4);          //Media Available Status changed
    define('MM_UPDATE', IPS_MEDIAMESSAGE + 5);
// --- LINK MANAGER
    define('IPS_LINKMESSAGE', IPS_BASE + 1000);           //Link Manager Message
    define('LM_CREATE', IPS_LINKMESSAGE + 1);             //On Link Create
    define('LM_DELETE', IPS_LINKMESSAGE + 2);             //On Link Delete
    define('LM_CHANGETARGET', IPS_LINKMESSAGE + 3);       //On Link TargetID change
// --- DATA HANDLER
    define('IPS_DATAMESSAGE', IPS_BASE + 1100);             //Data Handler Message
    define('DM_CONNECT', IPS_DATAMESSAGE + 1);             //On Instance Connect
    define('DM_DISCONNECT', IPS_DATAMESSAGE + 2);          //On Instance Disconnect
// --- SCRIPT ENGINE
    define('IPS_ENGINEMESSAGE', IPS_BASE + 1200);           //Script Engine Message
    define('SE_UPDATE', IPS_ENGINEMESSAGE + 1);             //On Library Refresh
    define('SE_EXECUTE', IPS_ENGINEMESSAGE + 2);            //On Script Finished execution
    define('SE_RUNNING', IPS_ENGINEMESSAGE + 3);            //On Script Started execution
// --- PROFILE POOL
    define('IPS_PROFILEMESSAGE', IPS_BASE + 1300);
    define('PM_CREATE', IPS_PROFILEMESSAGE + 1);
    define('PM_DELETE', IPS_PROFILEMESSAGE + 2);
    define('PM_CHANGETEXT', IPS_PROFILEMESSAGE + 3);
    define('PM_CHANGEVALUES', IPS_PROFILEMESSAGE + 4);
    define('PM_CHANGEDIGITS', IPS_PROFILEMESSAGE + 5);
    define('PM_CHANGEICON', IPS_PROFILEMESSAGE + 6);
    define('PM_ASSOCIATIONADDED', IPS_PROFILEMESSAGE + 7);
    define('PM_ASSOCIATIONREMOVED', IPS_PROFILEMESSAGE + 8);
    define('PM_ASSOCIATIONCHANGED', IPS_PROFILEMESSAGE + 9);
// --- TIMER POOL
    define('IPS_TIMERMESSAGE', IPS_BASE + 1400);            //Timer Pool Message
    define('TM_REGISTER', IPS_TIMERMESSAGE + 1);
    define('TM_UNREGISTER', IPS_TIMERMESSAGE + 2);
    define('TM_SETINTERVAL', IPS_TIMERMESSAGE + 3);
    define('TM_UPDATE', IPS_TIMERMESSAGE + 4);
    define('TM_RUNNING', IPS_TIMERMESSAGE + 5);
// --- STATUS CODES
    define('IS_SBASE', 100);
    define('IS_CREATING', IS_SBASE + 1); //module is being created
    define('IS_ACTIVE', IS_SBASE + 2); //module created and running
    define('IS_DELETING', IS_SBASE + 3); //module us being deleted
    define('IS_INACTIVE', IS_SBASE + 4); //module is not beeing used
// --- ERROR CODES
    define('IS_EBASE', 200);          //default errorcode
    define('IS_NOTCREATED', IS_EBASE + 1); //instance could not be created
// --- Search Handling
    define('FOUND_UNKNOWN', 0);     //Undefined value
    define('FOUND_NEW', 1);         //Device is new and not configured yet
    define('FOUND_OLD', 2);         //Device is already configues (InstanceID should be set)
    define('FOUND_CURRENT', 3);     //Device is already configues (InstanceID is from the current/searching Instance)
    define('FOUND_UNSUPPORTED', 4); //Device is not supported by Module

    define('vtBoolean', 0);
    define('vtInteger', 1);
    define('vtFloat', 2);
    define('vtString', 3);
}

//  API Commandos
class TXB_API_Commands
{

    const AT_Command = 0x08;
    const Transmit_Request = 0x10;
    const Remote_AT_Command = 0x17;
    const AT_Command_Responde = 0x88;
    const Modem_Status = 0x8a;
    const Transmit_Status = 0x8b;
    const Receive_Paket = 0x90;
    const IO_Data_Sample_Rx = 0x92;
    const Node_Identification_Indicator = 0x95;
    const Remote_AT_Command_Responde = 0x97;

    public static function ToString(int $Code)
    {
        switch ($Code)
        {
            case self::AT_Command:
                return 'AT_Command';
            case self::Transmit_Request:
                return 'Transmit_Request';
            case self::Remote_AT_Command:
                return 'Remote_AT_Command';
            case self::AT_Command_Responde:
                return 'AT_Command_Responde';
            case self::Modem_Status:
                return 'Modem_Status';
            case self::Transmit_Status:
                return 'Transmit_Status';
            case self::Receive_Paket:
                return 'Receive_Paket';
            case self::IO_Data_Sample_Rx:
                return 'IO_Data_Sample_Rx';
            case self::Node_Identification_Indicator:
                return 'Node_Identification_Indicator';
            case self::Remote_AT_Command_Responde:
                return 'Remote_AT_Command_Responde';
            default:
                return bin2hex(chr($Code));
        }
    }

}

class TXB_Modem_Status
{

    const Hardware_reset = 0;
    const Watchdog_timer_reset = 1;
    const Joined_network = 2;
    const Disassociated = 3;
    const Coordinator_started = 6;
    const Network_security_key_was_updated = 7;

    public static function ToString(int $Code)
    {
        switch ($Code)
        {
            case self::Hardware_reset:
                return 'Hardware_reset';
            case self::Watchdog_timer_reset:
                return 'Watchdog_timer_reset';
            case self::Joined_network:
                return 'Joined_network';
            case self::Disassociated:
                return 'Disassociated';
            case self::Coordinator_started:
                return 'Coordinator_started';
            case self::Network_security_key_was_updated:
                return 'Network_security_key_was_updated';
            default:
                return (string) $Code;
        }
    }

}

// Transmit Status Response
class TXB_Transmit_Status
{

    const OK = 0x00;
    const ACK_Fail = 0x01;
    const CCA_Fail = 0x02;
    const Invalid_Endpoint = 0x15;
    const Network_ACK_Fail = 0x21;
    const Not_Joined_to_Network = 0x22;
    const Self_addressed = 0x23;
    const Address_Not_Found = 0x24;
    const Route_Not_Found = 0x25;
    const Broadcast_Fail = 0x26;
    const Invalid_binding_table_index = 0x2B;
    const Resource_error = 0x2C;
    const broadcast_with_APS = 0x2D;
    const unicast_with_APS = 0x2E;
    const Resource_error_2 = 0x32;
    const Data_payload_too_large = 0x74;
    const Indirect_message_unrequested = 0x75;

    public static function ToString(int $Code)
    {
        switch ($Code)
        {
            case self::OK:
                return 'OK';
            case self::ACK_Fail:
                return 'ACK_Fail';
            case self::CCA_Fail:
                return 'CCA_Fail';
            case self:: Invalid_Endpoint:
                return 'Invalid_Endpoint';
            case self:: Network_ACK_Fail:
                return 'Network_ACK_Fail';
            case self:: Not_Joined_to_Network:
                return 'Not_Joined_to_Network';
            case self:: Self_addressed:
                return 'Self_addressed';
            case self:: Address_Not_Found:
                return 'Address_Not_Found';
            case self:: Route_Not_Found:
                return 'Route_Not_Found';
            case self:: Broadcast_Fail:
                return 'Broadcast_Fail';
            case self:: Invalid_binding_table_index:
                return 'Invalid_binding_table_index';
            case self:: Resource_error:
                return 'Resource_error';
            case self:: broadcast_with_APS:
                return 'broadcast_with_APS';
            case self:: unicast_with_APS:
                return 'unicast_with_APS';
            case self:: Resource_error_2:
                return 'Resource_error_2';
            case self:: Data_payload_too_large:
                return 'Data_payload_too_large';
            case self:: Indirect_message_unrequested:
                return 'Indirect_message_unrequested';
            default:
                return bin2hex(chr($Code));
        }
    }

}

// Receive Status Response
class TXB_Receive_Status
{

    const Packet_Acknowledged = 0x01;
    const Packet_was_a_broadcast_packet = 0x02;
    const Packet_encrypted_with_APS_encryption = 0x20;
    const Packet_was_sent_from_an_end_device = 0x40;

    public static function ToString(int $Code)
    {
        switch ($Code)
        {
            case self::Packet_Acknowledged:
                return 'Packet_Acknowledged';
            case self::Packet_was_a_broadcast_packet:
                return 'Packet_was_a_broadcast_packet';
            case self::Packet_encrypted_with_APS_encryption:
                return 'Packet_encrypted_with_APS_encryption';
            case self:: Packet_was_sent_from_an_end_device:
                return 'Packet_was_sent_from_an_end_device';
            default:
                return bin2hex(chr($Code));
        }
    }

}

// AT Commandos
class TXB_AT_Commands
{

    const AT_ND = 'ND';
    const AT_D0 = 'D0';
    const AT_D1 = 'D1';
    const AT_D2 = 'D2';
    const AT_D3 = 'D3';
    const AT_D4 = 'D4';
    const AT_D5 = 'D5';
    const AT_D6 = 'D6';
    const AT_D7 = 'D7';
    const AT_P0 = 'P0';
    const AT_P1 = 'P1';
    const AT_P2 = 'P2';
    const AT_IS = 'IS';
    const AT_DN = 'DN';
    const AT_ID = 'ID';
    const AT_SC = 'SC';
    const AT_SD = 'SD';
    const AT_ZS = 'ZS';
    const AT_NJ = 'NJ';
    const AT_JN = 'JN';
    const AT_OP = 'OP';
    const AT_OI = 'OI';
    const AT_CH = 'CH';
    const AT_NC = 'NC';
    const AT_SH = 'SH';
    const AT_SL = 'SL';
    const AT_MY = 'MY';
    const AT_MP = 'MP';
    const AT_DH = 'DH';
    const AT_DL = 'DL';
    const AT_NI = 'NI';
    const AT_NH = 'NH';
    const AT_BH = 'BH';
    const AT_AR = 'AR';
    const AT_DD = 'DD';
    const AT_NT = 'NT';
    const AT_NO = 'NO';
    const AT_NP = 'NP';
    const AT_CR = 'CR';
    const AT_SE = 'SE';
    const AT_DE = 'DE';
    const AT_CI = 'CI';
    const AT_PL = 'PL';
    const AT_PM = 'PM';
    const AT_PP = 'PP';
    const AT_EE = 'EE';
    const AT_EO = 'EO';
    const AT_KY = 'KY';
    const AT_NK = 'NK';
    const AT_BD = 'BD';
    const AT_NB = 'NB';
    const AT_SB = 'SB';
    const AT_RO = 'RO';
    const AT_AP = 'AP';
    const AT_AO = 'AO';
    const AT_CT = 'CT';
    const AT_GT = 'GT';
    const AT_CC = 'CC';
    const AT_SM = 'SM';
    const AT_ST = 'ST';
    const AT_SP = 'SP';
    const AT_SN = 'SN';
    const AT_SO = 'SO';
    const AT_PO = 'PO';
    const AT_PR = 'PR';
    const AT_LT = 'LT';
    const AT_RP = 'RP';
    const AT_DO = 'DO';
    const AT_IR = 'IR';
    const AT_IC = 'IC';
    const AT_VV = 'V+';
    const AT_VR = 'VR';
    const AT_HV = 'HV';
    const AT_AI = 'AI';
    const AT_DB = 'DB';
    const AT_VSS = '%V';

}

// AT Command Status Response
class TXB_AT_Command_Status
{

    const OK = 0;
    const Error = 1;
    const Invalid_Command = 2;
    const Invalid_Parameter = 3;
    const Tx_Failure = 4;

    public static function ToString(int $Code)
    {
        switch ($Code)
        {
            case self::OK:
                return 'OK';
            case self::Error:
                return 'Error';
            case self::Invalid_Command:
                return 'Invalid_Command';
            case self::Invalid_Parameter:
                return 'Invalid_Parameter';
            case self::Tx_Failure:
                return 'Tx_Failure';
            default:
                return (string) $Code;
        }
    }

}

// API Frame Record
/**
 * Enthält alle Daten eines API Commandos.
 * 
 */
class TXB_API_Data
{

    /**
     * API Command des Paketes.
     * @var TXB_API_Commands  
     * @access public
     */
    public $APICommand;

    /**
     * Name des Node.
     * @var string
     * @access public
     */
    public $NodeName;

    /**
     * Nutzdaten des Paketes.
     * @var string
     * @access public
     */
    public $Data;

    /**
     * FrameID des Paketes.
     * @var Byte  
     * @access public
     */
    public $FrameID = null;

    /**
     * Checksum des Paketes ok.
     * @var bool  
     * @access public
     */
    public $Checksum = true;

    /**
     * Liefert die Daten welche behalten werden müssen.
     * @access public
     */
    public function __sleep()
    {
        return array('APICommand', 'NodeName', 'Data', 'FrameID', 'Checksum');
    }

    public function __construct($Frame = null, $Payload = null)
    {
        if (is_null($Frame))
            return;
        if (is_object($Frame))
            if (property_exists($Frame, 'APICommand'))
            {
                $this->APICommand = utf8_decode($Frame->APICommand);
                if (!is_null($Frame->NodeName))
                    $this->NodeName = utf8_decode($Frame->NodeName);
                $this->Data = utf8_decode($Frame->Data);
                $this->Checksum = true;
                return;
            }
        if (property_exists($Frame, 'ATCommand'))
        {
            $this->APICommand = TXB_API_Commands::Remote_AT_Command;
            $this->Data = chr(0x02) . $Frame->ATCommand . $Frame->Data;
            $this->Checksum = true;
            return;
        }
        if (!is_null($Payload))
        {
            $this->APICommand = $Frame;
            $this->Data = $Payload;
            return;
        }
        $checksum = ord($Frame[strlen($Frame) - 1]);
        for ($x = 0; $x < (strlen($Frame) - 1); $x++)
        {
            $checksum = $checksum + ord($Frame[$x]);
        }
        $checksum = $checksum & 0xff;
        $this->Checksum = ($checksum == 0xff);
        $this->APICommand = ord($Frame[0]);
        $this->FrameID = 0;
        $Frame = substr($Frame, 1, -1);
        switch ($this->APICommand)
        {
            case TXB_API_Commands::AT_Command_Responde:
            case TXB_API_Commands::Transmit_Status:
            case TXB_API_Commands::Remote_AT_Command_Responde:
                $this->FrameID = ord($Frame[0]);
                $Frame = substr($Frame, 1);
                break;
            /*            case TXB_API_Commands::Modem_Status:
              case TXB_API_Commands::Receive_Paket:
              case TXB_API_Commands::IO_Data_Sample_Rx:
              case TXB_API_Commands::Node_Identification_Indicator:
              default:
              $this->Data = $Frame;
              break; */
        }
        $this->Data = $Frame;
    }

    public function ExtractNodeAddr64()
    {
        $Addr64 = substr($this->Data, 0, 8);
        $this->Data = substr($this->Data, 8);
        return $Addr64;
    }

    public function ExtractNodeAddr16()
    {
        $Addr16 = substr($this->Data, 0, 2);
        $this->Data = substr($this->Data, 2);
        return $Addr16;
    }

    public function ExtractString()
    {
        $end = strpos($this->Data, chr(0));
        $Value = substr($this->Data, 0, $end);
        $this->Data = substr($this->Data, $end);
        return $Value;
    }

    /** Liefert den APIFrame für den Versand an den Coordinator
     * 
     * @param TXB_Node $Node
     * @return string
     */
    public function ToFrame(TXB_Node $Node = null)
    {
        $Data = chr($this->APICommand) . chr($this->FrameID);
        if (!is_null($Node))
            $Data .= $Node->NodeAddr64 . $Node->NodeAddr64;
        $Data.=$this->Data;

        $len = strlen($Data);
        //Startzeichen
        $frame = chr(0x7e);
        //Laenge
        $frame .= chr(floor($len / 256)) . chr($len % 256);
        //Daten
        $frame.=$Data;
        //Checksum
        $check = 0;
        for ($x = 0; $x < $len; $x++)
        {
            $check = $check + ord($Data[$x]);
        }
        $check = $check & 0xff;
        $check = 0xff - $check;
        $frame = $frame . chr($check);
        return $frame;
    }

    public function ToJSONString($GUID)
    {
        $SendData = new stdClass;
        $SendData->DataID = $GUID;
        $SendData->APICommand = utf8_encode($this->APICommand);
        $SendData->NodeName = utf8_encode($this->NodeName);
        $SendData->Data = utf8_encode($this->Data);
        return json_encode($SendData);
    }

}

/**
 * TXB_API_DataList ist eine Klasse welche ein Array von TXB_API_Data enthält.
 *
 * @package       XBeeZigBee
 * @author        Michael Tröger <micha@nall-chan.net>
 * @copyright     2016 Michael Tröger
 * @license       https://creativecommons.org/licenses/by-nc-sa/4.0/ CC BY-NC-SA 4.0
 * @version       1.0
 * @example <b>Ohne</b>
 */
class TXB_API_DataList
{

    /**
     * Array mit allen Items.
     * @var array
     * @access public
     */
    public $Items = array();

    /**
     * Aktueller Frame.
     * @var array
     * @access public
     */
    public $FrameID = 1;

    /**
     * Liefert die Daten welche behalten werden müssen.
     * @access public
     */
    public function __sleep()
    {
        return array('Items', 'FrameID');
    }

    /**
     * Fügt einen Eintrag in $Items hinzu.
     * @access public
     * @return int FrameID Die FrameID in der Warteschlange.
     */
    public function Add()
    {
        $FrameID = $this->FrameID;
        $this->Items[$FrameID] = null;
        if ($this->FrameID == 255)
            $this->FrameID = 1;
        else
            $this->FrameID++;
        return $FrameID;
    }

    /**
     * Update für einen Eintrag in $Items.
     * @access public
     * @param TXB_API_Data $APIData Das neue Objekt.
     * @return bool True bei erfolg, False wenn FrameID nicht vorhanden.
     */
    public function Update(TXB_API_Data $APIData)
    {
        if (isset($this->Items[$APIData->FrameID]))
        {
            $this->Items[$APIData->FrameID] = $APIData;
            return false;
        }
        return true;
    }

    /**
     * Löscht einen Eintrag aus $Items.
     * @access public
     * @param int $Index Der Index des zu löschenden Items.
     */
    public function Remove(int $Index)
    {
        if (isset($this->Items[$Index]))
            unset($this->Items[$Index]);
    }

    /**
     * Liefert einen bestimmten Eintrag aus den Items.
     * @access public
     * @param int $Index
     * @return TXB_API_Data APIData der Antwort.
     */
    public function Get(int $Index)
    {
        if (!isset($this->Items[$Index]))
            return false;
        return $this->Items[$Index];
    }

}

// AT Command Frame
class TXB_CMD_Data
{

    public $ATCommand;
    public $Status;
    public $Data;

    public function __sleep()
    {
        return array('ATCommand', 'Status', 'Data');
    }

    public function __construct(string $Data, string $Payload = null)
    {
        if (is_null($Payload))
        {
            if (is_string($Data))
            {
                $this->ATCommand = substr($Data, 0, 2);
                $this->Status = substr($Data, 2, 1);
                $this->Data = substr($Data, 3);
            }
        }
        else
        {
            $this->ATCommand = $Data;
            $this->Data = $Payload;
        }
    }

    public function ExtractNodeAddr64()
    {
        $Addr64 = substr($this->Data, 0, 8);
        $this->Data = substr($this->Data, 8);
        return $Addr64;
    }

    public function ExtractNodeAddr16()
    {
        $Addr16 = substr($this->Data, 0, 2);
        $this->Data = substr($this->Data, 2);
        return $Addr16;
    }

    public function ExtractString()
    {
        $end = strpos($this->Data, chr(0));
        $Value = substr($this->Data, 0, $end);
        $this->Data = substr($this->Data, $end);
        return $Value;
    }

}


// I/O Pin BitMask
class TXB_Pin_Mask
{

    const PIN_D00 = 0;
    const PIN_D01 = 1;
    const PIN_D02 = 2;
    const PIN_D03 = 3;
    const PIN_D04 = 4;
    const PIN_D05 = 5;
    const PIN_D06 = 6;
    const PIN_D07 = 7;
    const PIN_D10 = 10;
    const PIN_D11 = 11;
    const PIN_D12 = 12;

}

//NA | NA | NA | CD/DIO 12 |
//PWM/DI O11 | RSSI/DI O10 | NA | NA |
//CTS/DI O7 | RTS/DI O6 | ASSOC DIO5 | DIO4 |
//AD3/DI O3 | AD2/DI O2 | AD1/DI O1 | AD0/DI O0


class TXB_Node extends stdClass
{

    /**
     * 64Bit Adresse des Node.
     * @var string
     * @access public
     */
    public $NodeAddr64;

    /**
     * 16Bit Adresse des Node.
     * @var string
     * @access public
     */
    public $NodeAddr16;

    /**
     * Name des Node.
     * @var string
     * @access public
     */
    public $NodeName;

    /**
     * Liefert die Daten welche behalten werden müssen.
     * @access public
     */
    public function __sleep()
    {
        return array('NodeName', 'NodeAddr16', 'NodeAddr64');
    }

    /*
      public function utf8_encode()
      {
      $this->NodeAddr16 = utf8_encode($this->NodeAddr16);
      $this->NodeAddr64 = utf8_encode($this->NodeAddr64);
      $this->NodeName = utf8_encode($this->NodeName);
      }

      public function utf8_decode()
      {
      $this->NodeAddr16 = utf8_decode($this->NodeAddr16);
      $this->NodeAddr64 = utf8_decode($this->NodeAddr64);
      $this->NodeName = utf8_decode($this->NodeName);
      }
     */
}

/**
 * TXB_NodeList ist eine Klasse welche ein Array von TXB_Node enthält.
 *
 * @package       XBeeZigBee
 * @author        Michael Tröger <micha@nall-chan.net>
 * @copyright     2016 Michael Tröger
 * @license       https://creativecommons.org/licenses/by-nc-sa/4.0/ CC BY-NC-SA 4.0
 * @version       1.0
 * @example <b>Ohne</b>
 */
class TXB_NodeList
{

    /**
     * Array mit allen Items.
     * @var array
     * @access public
     */
    public $Items = array();

    /**
     * Liefert die Daten welche behalten werden müssen.
     * @access public
     */
    public function __sleep()
    {
        return array('Items');
    }

    /**
     * Update für einen Eintrag in $Items.
     * @access public
     * @param TXB_Node $Node Das neue Objekt.
     */
    public function Update(TXB_Node $Node)
    {
        $this->Items[$Node->NodeName] = $Node;
    }

    /**
     * Löscht einen Eintrag aus $Items.
     * @access public
     * @param string $NodeName Der Index des zu löschenden Items.
     */
    public function Remove(string $NodeName)
    {
        if (isset($this->Items[$NodeName]))
            unset($this->Items[$NodeName]);
    }

    /**
     * Liefert einen bestimmten Eintrag aus den Items.
     * @access public
     * @param string $NodeName
     * @return TXB_Node Node
     */
    public function GetByNodeName(string $NodeName)
    {
        if (!isset($this->Items[$NodeName]))
            return false;
        return $this->Items[$NodeName];
    }

    /** Liefert einen bestimmten Eintrag aus den Items.
     * @access public
     * @param string $NodeAddr16
     * @return TXB_Node Node
     */
    public function GetByNodeAddr16(string $NodeAddr16)
    {
        foreach ($this->Items as $Name => $Node)
        {
            if ($Node->NodeAddr16 == $NodeAddr16)
                return $this->Items[$Name];
        }
        return false;
    }

    /** Liefert einen bestimmten Eintrag aus den Items.
     * @access public
     * @param string $NodeAddr64
     * @return TXB_Node Node
     */
    public function GetByNodeAddr64(string $NodeAddr64)
    {
        foreach ($this->Items as $Name => $Node)
        {
            if ($Node->NodeAddr64 == $NodeAddr64)
                return $this->Items[$Name];
        }
        return false;
    }

}

//class TXB_NodeFromGeneric extends TXB_Node
//{
//
//    public function __construct($object)
//    {
//        $this->NodeAddr16 = $object->NodeAddr16;
//        $this->NodeAddr64 = $object->NodeAddr64;
//        $this->NodeName = $object->NodeName;
//    }
//
//}

/**
 *  DebugHelper Trait.
 *
 * @package       NoTrigger
 * @author        Michael Tröger <micha@nall-chan.net>
 * @copyright     2016 Michael Tröger
 * @license       https://creativecommons.org/licenses/by-nc-sa/4.0/ CC BY-NC-SA 4.0
 * @version       1.0
 * @example <b>Ohne</b>
 */
trait DebugHelper
{

    /**
     * Ergänzt SetBuffer um eine Debug Ausgabe.
     *
     * @access protected
     * @param string $Name Name des Buffer.
     * @param string $Data Daten für den Buffer.
     */
    protected function SetBuffer($Name, $Data)
    {
        $this->SendDebug('SetBuffer ' . $Name, $Data, 0);
        parent::SetBuffer($Name, $Data);
    }

    /**
     * Ergänzt GetBuffer um eine Debug Ausgabe.
     *
     * @access protected
     * @param string $Name Name des Buffer.
     * @return string Daten aus den Buffer.
     */
    protected function GetBuffer($Name)
    {
        $Data = parent::GetBuffer($Name);
        $this->SendDebug('GetBuffer ' . $Name, $Data, 0);
        return $Data;
    }

    /**
     * Ergänzt SendDebug um Möglichkeit Objekte und Array auszugeben.
     *
     * @access protected
     * @param string $Message Nachricht für Data.
     * @param TXB_API_Data|mixed $Data Daten für die Ausgabe.
     * @return int $Format Ausgabeformat für Strings.
     */
    protected function SendDebug($Message, $Data, $Format)
    {
        if (is_a($Data, 'TXB_API_Data'))
        {
            $this->SendDebug($Message . ' APICmd', TXB_API_Commands::ToString($Data->APICommand), 0);
            $this->SendDebug($Message . ' Data', $Data->Data, 1);
            if (!is_null($Data->FrameID))
                $this->SendDebug($Message . ' FrameID', (string) $Data->FrameID, 0);
        }elseif (is_a($Data, 'TXB_CMD_Data'))
        {
            $this->SendDebug($Message . ' ATCmd', $Data->ATCommand, 0);
            $this->SendDebug($Message . ' Status', TXB_AT_Command_Status::ToString($Data->Status), 0);
            $this->SendDebug($Message . ' Data', $Data->Data, 1);
        }
        elseif (is_object($Data))
        {
            foreach ($Data as $Key => $DebugData)
            {

                $this->SendDebug($Message . ":" . $Key, $DebugData, 1);
            }
        }
        else if (is_array($Data))
        {
            foreach ($Data as $Key => $DebugData)
            {
                $this->SendDebug($Message . ":" . $Key, $DebugData, 0);
            }
        }
        else
        {
            parent::SendDebug($Message, $Data, $Format);
        }
    }

}

trait Semaphore
{

    private function lock($ident)
    {
        for ($i = 0; $i < 100; $i++)
        {
            if (IPS_SemaphoreEnter("XBZB_" . (string) $this->InstanceID . (string) $ident, 1))
            {
                return true;
            }
            else
            {
                IPS_Sleep(mt_rand(1, 5));
            }
        }
        return false;
    }

    private function unlock($ident)
    {
        IPS_SemaphoreLeave("XBZB_" . (string) $this->InstanceID . (string) $ident);
    }

}

trait InstanceStatus
{

    protected function SetStatus($InstanceStatus)
    {
        if ($InstanceStatus <> IPS_GetInstance($this->InstanceID)['InstanceStatus'])
            parent::SetStatus($InstanceStatus);
    }

    protected function HasActiveParent()
    {
        $instance = IPS_GetInstance($this->InstanceID);
        if ($instance['ConnectionID'] > 0)
        {
            $parent = IPS_GetInstance($instance['ConnectionID']);
            if ($parent['InstanceStatus'] == 102)
                return true;
        }
        return false;
    }

}

?>