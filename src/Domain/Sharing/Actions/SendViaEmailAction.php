<?php
namespace Domain\Sharing\Actions;

use App\Users\Models\User;
use Spatie\QueueableAction\QueueableAction;
use Illuminate\Support\Facades\Notification;
use Domain\Sharing\Notifications\SharedSendViaEmail;

class SendViaEmailAction
{
    use QueueableAction;

    public function __invoke(
        array $emails,
        string $token,
        User $user,
    ): void {
        foreach ($emails as $email) {
            Notification::route('mail', $email)
                ->notify(new SharedSendViaEmail($token, $user));
        }
    }
}
