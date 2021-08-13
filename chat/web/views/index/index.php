<?php

use models\RoomEntity;

$dirLogo = __DIR__ . '/../../public/images/logo_rooms/';

/**
 * @var RoomEntity[] $rooms
 *
 */

?>

<div class="messaging">
    <div class="inbox_msg">
        <div class="inbox_people">
            <div class="headind_srch">
                <div class="recent_heading">
                    <h4>Rooms <a class="btn btn-success btn-sm float-end" href="/rooms/create">Add Rooms</a></h4>
                </div>
            </div>

            <div class="inbox_chat">
                <?php foreach ($rooms as $room): ?>
                    <div class="chat_list" data-room-id="<?= $room->id ?>">
                        <div class="chat_people">
                            <div class="chat_img"><img
                                        src="/web/public/images/logo_rooms/<?php echo file_exists($dirLogo . $room->id . '.jpeg') ? $room->id . '.jpeg' : 'default.png' ?>"
                                        class="rounded-circle" alt="Logo room">
                            </div>
                            <div class="chat_ib">
                                <h5><?= $room->title ?><span
                                            class="chat_date"><?= (new DateTime($room->created_at))->format('M d') ?></span>
                                </h5>
                                <p>Test, which is a new approach to have all solutions
                                    astrology under one roof.</p>
                            </div>
                        </div>
                    </div>
                    <div class="headind_srch" setting-room-id="<?= $room->id ?>"><a
                                class="btn btn-outline-secondary btn-sm float-end"
                                href="/rooms/edit?roomId=<?= $room->id ?>">Setting room</a>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
        <div class="mesgs">
            <div class="msg_history"></div>
            <div class="type_msg">
                <div class="input_msg_write">
                    <input type="text" class="write_msg" placeholder="Type a message"/>
                    <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
