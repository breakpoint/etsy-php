<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyObject;
use breakpoint\etsy\Classes\EtsyResults;
use breakpoint\etsy\Classes\EtsyRequest;
use Psr\Http\Message\ResponseInterface;

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
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllTeams(array $parameters = []) {
        return $this->requestCollection('GET', '/teams', $parameters);
    }

    /**
     * Returns specified team by ID or team name
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findTeams(array $parameters = []) {
        return $this->requestCollection('GET', '/teams/:team_ids/', $parameters);
    }

    /**
     * Returns a list of teams for a specific user
     *
     * @param array $parameters
     * @return EtsyResults|ResponseInterface
     * @throws \Exception
     */
    public function findAllTeamsForUser(array $parameters = []) {
        return $this->requestCollection('GET', '/users/:user_id/teams', $parameters);
    }

}