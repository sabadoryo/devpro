<?php

print_r(getLuckyTickets());

function getLuckyTickets(): array
{
    $luckyTickets = [];
    $value = 0;

    while ($value < 999999) {
        if ($value < 99999) {
            $ticket = getFormatted($value);
        } else {
            $ticket = $value;
        }

        $nums = array_chunk(str_split($ticket), 3);

        $firstHalfSum = array_sum($nums[0]);
        $secondHalfSum = array_sum($nums[1]);

        if ($firstHalfSum == $secondHalfSum) {
            $luckyTickets[] = $ticket;
        }
        $value++;
    }

    return $luckyTickets;
}

function getFormatted($value): string
{
    return str_pad($value, 6, 0, STR_PAD_LEFT);
}

