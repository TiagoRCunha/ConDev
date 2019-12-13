<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PollController extends Controller
{
    public function getPoll(Request $request)
    {
        return \App\Persistence\PollDAO::getPollById($request->id);
    }

    public function getAll()
    {
        return \App\Persistence\PollDAO::getAll();
    }

    public function setPoll(Request $request)
    {
        $poll = new \App\Model\Poll($request);

        return json_encode([
            "name" => $poll->getName(),
            "user" => $poll->getUser(),
            "votes" => $poll->getVotes(),
            "options" => $poll->getOptions(),
            "deleted" => $poll->getDeleted()
        ]);

        // return json_encode(
        //     [ "success" => \App\Persistence\PollDAO::insertPoll($poll)]
        // );
    }

    public function updatePoll(Request $request)
    {
        $poll = new \App\Model\Poll($request);

        return json_encode(
            [ "success" => \App\Persistence\PollDAO::updatePoll($request->id, $poll)]
        );
    }

    public function deletePoll(Request $request)
    {
        return json_encode(
            [ "success" => \App\Persistence\PollDAO::deletePoll($request->id)]
        );
    }
}
