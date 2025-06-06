<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/message.proto

namespace GPBMetadata\Google\Chat\V1;

class Message
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Apps\Card\V1\Card::initOnce();
        \GPBMetadata\Google\Chat\V1\ActionStatus::initOnce();
        \GPBMetadata\Google\Chat\V1\Annotation::initOnce();
        \GPBMetadata\Google\Chat\V1\Attachment::initOnce();
        \GPBMetadata\Google\Chat\V1\ContextualAddon::initOnce();
        \GPBMetadata\Google\Chat\V1\DeletionMetadata::initOnce();
        \GPBMetadata\Google\Chat\V1\MatchedUrl::initOnce();
        \GPBMetadata\Google\Chat\V1\Reaction::initOnce();
        \GPBMetadata\Google\Chat\V1\SlashCommand::initOnce();
        \GPBMetadata\Google\Chat\V1\Space::initOnce();
        \GPBMetadata\Google\Chat\V1\User::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�!
google/chat/v1/message.protogoogle.chat.v1google/api/resource.protogoogle/apps/card/v1/card.proto"google/chat/v1/action_status.protogoogle/chat/v1/annotation.protogoogle/chat/v1/attachment.proto%google/chat/v1/contextual_addon.proto&google/chat/v1/deletion_metadata.proto google/chat/v1/matched_url.protogoogle/chat/v1/reaction.proto"google/chat/v1/slash_command.protogoogle/chat/v1/space.protogoogle/chat/v1/user.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�

Message
name (	)
sender (2.google.chat.v1.UserB�A7
create_time (2.google.protobuf.TimestampB�A�A9
last_update_time (2.google.protobuf.TimestampB�A4
delete_time (2.google.protobuf.TimestampB�A
text (	
formatted_text+ (	B�A=
cards (2*.google.chat.v1.ContextualAddOnMarkup.CardB,
cards_v2 (2.google.chat.v1.CardWithId4
annotations
 (2.google.chat.v1.AnnotationB�A&
thread (2.google.chat.v1.Thread$
space (2.google.chat.v1.Space
fallback_text (	<
action_response (2.google.chat.v1.ActionResponseB�A
argument_text (	B�A8
slash_command (2.google.chat.v1.SlashCommandB�A.

attachment (2.google.chat.v1.Attachment4
matched_url (2.google.chat.v1.MatchedUrlB�A
thread_reply (B�A"
client_assigned_message_id  (	K
emoji_reaction_summaries! (2$.google.chat.v1.EmojiReactionSummaryB�A9
private_message_viewer$ (2.google.chat.v1.UserB�A@
deletion_metadata& (2 .google.chat.v1.DeletionMetadataB�AK
quoted_message_metadata\' (2%.google.chat.v1.QuotedMessageMetadataB�A7
attached_gifs* (2.google.chat.v1.AttachedGifB�A:
accessory_widgets, (2.google.chat.v1.AccessoryWidget:C�A@
chat.googleapis.com/Message!spaces/{space}/messages/{message}"
AttachedGif
uri (	B�A"�
QuotedMessageMetadata1
name (	B#�A�A
chat.googleapis.com/Message9
last_update_time (2.google.protobuf.TimestampB�A:��A~
)chat.googleapis.com/QuotedMessageMetadataQspaces/{space}/messages/{message}/quotedMessageMetadata/{quoted_message_metadata}"q
Thread
name (	

thread_key (	B�A:@�A=
chat.googleapis.com/Threadspaces/{space}/threads/{thread}"�
ActionResponse>
type (2+.google.chat.v1.ActionResponse.ResponseTypeB�A
url (	B�A8
dialog_action (2.google.chat.v1.DialogActionB�AI
updated_widget (2,.google.chat.v1.ActionResponse.UpdatedWidgetB�AR
SelectionItems@
items (21.google.apps.card.v1.SelectionInput.SelectionItemw
UpdatedWidgetD
suggestions (2-.google.chat.v1.ActionResponse.SelectionItemsH 
widget (	B
updated_widget"�
ResponseType
TYPE_UNSPECIFIED 
NEW_MESSAGE
UPDATE_MESSAGE
UPDATE_USER_MESSAGE_CARDS
REQUEST_CONFIG

DIALOG
UPDATE_WIDGET"S
AccessoryWidget6
button_list (2.google.apps.card.v1.ButtonListH B
action"F
GetMessageRequest1
name (	B#�A�A
chat.googleapis.com/Message"X
DeleteMessageRequest1
name (	B#�A�A
chat.googleapis.com/Message
force ("�
UpdateMessageRequest-
message (2.google.chat.v1.MessageB�A/
update_mask (2.google.protobuf.FieldMask
allow_missing (B�A"�
CreateMessageRequest3
parent (	B#�A�Achat.googleapis.com/Message-
message (2.google.chat.v1.MessageB�A

thread_key (	B�A

request_id (	B�AZ
message_reply_option (27.google.chat.v1.CreateMessageRequest.MessageReplyOptionB�A

message_id	 (	B�A"
MessageReplyOption$
 MESSAGE_REPLY_OPTION_UNSPECIFIED (
$REPLY_MESSAGE_FALLBACK_TO_NEW_THREAD
REPLY_MESSAGE_OR_FAIL"�
ListMessagesRequest3
parent (	B#�A�Achat.googleapis.com/Message
	page_size (

page_token (	
filter (	
order_by (	
show_deleted ("Z
ListMessagesResponse)
messages (2.google.chat.v1.Message
next_page_token (	"�
DialogAction-
dialog (2.google.chat.v1.DialogB�AH 8
action_status (2.google.chat.v1.ActionStatusB�AB
action"6
Dialog,
body (2.google.apps.card.v1.CardB�A"F

CardWithId
card_id (	\'
card (2.google.apps.card.v1.CardB�
com.google.chat.v1BMessageProtoPZ,cloud.google.com/go/chat/apiv1/chatpb;chatpb�Google.Apps.Chat.V1�Google\\Apps\\Chat\\V1�Google::Apps::Chat::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

