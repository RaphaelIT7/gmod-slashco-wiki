<function name="IsLobbyPlyOfferer" parent="SlashCo" type="libraryfunc">
	<description>
		Returns `true` if the given player started the current offering
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="ply" type="Player">The player to check</arg>
	</args>
	<rets>
		<ret name="isOfferer" type="boolean">`true` if the given player created the current offering</ret>
	</rets>
</function>