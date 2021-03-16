<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => (int) $this->id,
            'name' => (string) $this->name,
            'description' => (string) $this->description,
            'user' => new UserResource($this->user),
            'state' => new StateResource($this->state),
            'priority' => new PriorityResource($this->priority),
            'comments' =>  CommentResource::collection($this->comments),
            'attachments' => AttachmentResource::collection($this->attachments),
        ];
    }
}
