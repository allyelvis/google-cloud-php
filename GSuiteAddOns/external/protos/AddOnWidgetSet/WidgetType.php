<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/script/type/addon_widget_set.proto

namespace Google\Apps\Script\Type\AddOnWidgetSet;

use UnexpectedValueException;

/**
 * The Widget type. DEFAULT is the basic widget set.
 *
 * Protobuf type <code>google.apps.script.type.AddOnWidgetSet.WidgetType</code>
 */
class WidgetType
{
    /**
     * The default widget set.
     *
     * Generated from protobuf enum <code>WIDGET_TYPE_UNSPECIFIED = 0;</code>
     */
    const WIDGET_TYPE_UNSPECIFIED = 0;
    /**
     * The date picker.
     *
     * Generated from protobuf enum <code>DATE_PICKER = 1;</code>
     */
    const DATE_PICKER = 1;
    /**
     * Styled buttons include filled buttons and disabled buttons.
     *
     * Generated from protobuf enum <code>STYLED_BUTTONS = 2;</code>
     */
    const STYLED_BUTTONS = 2;
    /**
     * Persistent forms allow persisting form values during actions.
     *
     * Generated from protobuf enum <code>PERSISTENT_FORMS = 3;</code>
     */
    const PERSISTENT_FORMS = 3;
    /**
     * Fixed footer in card.
     *
     * Generated from protobuf enum <code>FIXED_FOOTER = 4;</code>
     */
    const FIXED_FOOTER = 4;
    /**
     * Update the subject and recipients of a draft.
     *
     * Generated from protobuf enum <code>UPDATE_SUBJECT_AND_RECIPIENTS = 5;</code>
     */
    const UPDATE_SUBJECT_AND_RECIPIENTS = 5;
    /**
     * The grid widget.
     *
     * Generated from protobuf enum <code>GRID_WIDGET = 6;</code>
     */
    const GRID_WIDGET = 6;
    /**
     * A Gmail add-on action that applies to the addon compose UI.
     *
     * Generated from protobuf enum <code>ADDON_COMPOSE_UI_ACTION = 7;</code>
     */
    const ADDON_COMPOSE_UI_ACTION = 7;

    private static $valueToName = [
        self::WIDGET_TYPE_UNSPECIFIED => 'WIDGET_TYPE_UNSPECIFIED',
        self::DATE_PICKER => 'DATE_PICKER',
        self::STYLED_BUTTONS => 'STYLED_BUTTONS',
        self::PERSISTENT_FORMS => 'PERSISTENT_FORMS',
        self::FIXED_FOOTER => 'FIXED_FOOTER',
        self::UPDATE_SUBJECT_AND_RECIPIENTS => 'UPDATE_SUBJECT_AND_RECIPIENTS',
        self::GRID_WIDGET => 'GRID_WIDGET',
        self::ADDON_COMPOSE_UI_ACTION => 'ADDON_COMPOSE_UI_ACTION',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}