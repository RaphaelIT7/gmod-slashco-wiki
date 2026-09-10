<function name="HeadBob" parent="" type="libraryfunc">
	<description>
		`CalcView` hook callback that adds a camera bobbing effect for Survivors while they walk, based on their velocity and movement keys.<br>
		Has no effect for other teams, while sliding, or while the `slashco_cl_disable_headbob` convar is enabled.<br>
	</description>
	<realm>Client</realm>
	<args>
		<arg name="pl" type="Player">The local player</arg>
		<arg name="pos" type="Vector">The view position</arg>
		<arg name="ang" type="Angle">The view angles</arg>
		<arg name="fov" type="number">The view FOV</arg>
	</args>
	<rets>
		<ret name="view" type="table">The resulting view data, forwarded to `GAMEMODE:CalcView`</ret>
	</rets>
</function>
