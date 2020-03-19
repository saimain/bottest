<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CouCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {


        $frame =  array(
            'attachment' => [
                'type' => 'template',
                'payload' => [
                    'template_type' => 'generic',
                    'image_aspect_ratio' => 'square',
                    'elements' => array(),
                ]
            ],
        );

        // $data =  $frame['attachment']['payload']['elements'][];
        // $temp = array_keys($data);
        foreach ($this as $i) {
            $frame['attachment']['payload']['elements'][] = $i;
            // $temp[0] = $i;
        }

        // return gettype($frame['attachment']['payload']['elements']);
        // return gettype(json_encode($frame['attachment']['payload']['elements']));
        $data = json_encode($frame['attachment']['payload']['elements']);
        return $frame;
        // return $frame;
        // print_r($frame);
    }
}
