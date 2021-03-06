<?php  namespace Rossedman\Teamwork;

use Rossedman\Teamwork\Traits\RestfulTrait;

class Company extends AbstractObject {

    use RestfulTrait;

    protected $wrapper  = 'company';

    protected $endpoint = 'companies';

    /**
     * Get People Associated With Company
     * GET /companies/{company_id}/people.json
     *
     * @link http://developer.teamwork.com/people#get_people_(withi
     *
     * @return mixed
     */
    public function people()
    {
        return $this->client->get("$this->endpoint/$this->id/people")->response();
    }
}