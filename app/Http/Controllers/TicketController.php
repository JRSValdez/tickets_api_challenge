<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddTicketRequest;
use App\Http\Resources\TicketCollection;
use App\Http\Resources\TicketResource;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return new TicketCollection(Ticket::all());
    }

    public function store(AddTicketRequest $request)
    {
        $validated = $request->validated();
        $newTicket = Ticket::create($validated);
        return ['success' => true, 'data' => new TicketResource($newTicket)];
    }

    public function show(Ticket $ticket)
    {
        return ['success' => true, 'data' => new TicketResource($ticket)];
    }

    public function update(AddTicketRequest $request, Ticket $ticket)
    {
        $validated = $request->validated();
        $ticket->update($validated);
        return ['success' => true, 'data' => new TicketResource($ticket)];
    }

    public function ticketsByUser(Request $request)
    {
        $user = User::find($request->id);
        return new TicketCollection($user->tickets);
    }

}
