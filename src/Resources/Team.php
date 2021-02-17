<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/team
 *
 * Class Team
 * @package breakpoint\etsy
 */
class Team extends EtsyRequest {

    /**
     * Returns all Teams
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllTeams(array $parameters = []) {
        return $this->get('/teams', $parameters);
    }

    /**
     * Returns specified team by ID or team name
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findTeams(array $parameters = []) {
        return $this->get('/teams/:team_ids/', $parameters);
    }

    /**
     * Returns a list of teams for a specific user
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllTeamsForUser(array $parameters = []) {
        return $this->get('/users/:user_id/teams', $parameters);
    }

}