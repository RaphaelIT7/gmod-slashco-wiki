<function name="FindPlayersInView" parent="Player" type="classfunc">
	<description>
		Finds all players in a cone from our player's view and doing traces to filter for players obstructed by objects.<br>
		For slashers this respects the value of <page>Player:GetCanSeePlayers</page> returning an empty table if thir blind<br>
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="distance" type="number">Maximum distance to check for</arg>
		<arg name="radius" type="number">
			A bit more complex as this value is given to [ents.FindInCone](https://wiki.facepunch.com/gmod/ents.FindInCone) as the `angle_cos` argument.<br>
			See the Garry's Mod wiki to know how to use it.<br>
		</arg>
		<arg name="notrace" type="bool" default="false">If set, the function won't do traces to verify if a player is visible</arg>
	</args>
	<rets>
		<ret name="result" type="table">A sequential table containing all found players</ret>
	</rets>
</function>