<?php

$tickets = ['003300', '123321', '246660', '123100', '333330', '111300'];

print_r(getLuckyTickets($tickets));

function getLuckyTickets($tickets): array
{
    $luckyTickets = [];

    foreach ($tickets as $ticket) {
        $nums = array_chunk(str_split($ticket), 3);

        $firstHalfSum = array_sum($nums[0]);
        $secondHalfSum = array_sum($nums[1]);

        if ($firstHalfSum == $secondHalfSum) {
            $luckyTickets[] = $ticket;
        }
    }

    return $luckyTickets;
}
