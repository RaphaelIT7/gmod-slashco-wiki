<function name="GetCurrentFogMultiplier" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the highest-priority fog multiplier currently applicable to a player.<br>
		Spectators use the fog settings of the player they are spectating.<br>
		If a spectator is not spectating a valid player, a multiplier of 100 is returned.<br>
		When `infoTbl` is provided, applicable fog information is merged into it while searching.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="ply" type="Player">Player whose applicable fog should be determined</arg>
		<arg name="infoTbl" type="table" default="nil" optional>Optional table to merge applicable fog information into</arg>
	</args>
	<rets>
		<ret name="multiplier" type="number">Highest-priority applicable fog multiplier, or 1 when no fog entry applies</ret>
		<ret name="fogInfo" type="table">Highest-priority applicable fog information, or `nil` when no fog entry applies</ret>
	</rets>
</function>